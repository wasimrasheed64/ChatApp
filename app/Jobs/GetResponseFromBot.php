<?php

namespace App\Jobs;

use App\Events\MessageSent;
use App\Models\Bot;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Client\RequestException;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class GetResponseFromBot implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected  $newMessage;
    protected $chatId = null;

    /**
     * Create a new job instance.
     */
    public function __construct($chatId,$newMessage)
    {
        $this->chatId = $chatId;
        $this->newMessage = $newMessage;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $botURL = Bot::find(1)->url;
        $user = User::find(2);

        // Fetch chat messages and format them for the bot request
        $chatHistory = Chat::find($this->chatId);

        // Prepare the request data
        $data = [
            'query' => $this->newMessage,   // New message being sent to the bot
            'request_id' => $this->chatId,  // Assuming the chat ID is being used as the request ID
            'user_history' => $chatHistory->updated_history ? json_decode($chatHistory->updated_history) :  [] // Previous chat messages history
        ];

        // Guzzle client and request configuration
        $client = new Client();
        $requestBody = [
            'json' => $data, // Passing data as JSON
            'headers' => [
                'Content-Type' => 'application/json',  // Ensure JSON format in headers
                'X-Requested-With' => 'XMLHttpRequest',
            ],
            'http_errors' => false, // Handle any potential errors without throwing exceptions
        ];

        logger('Request body:', $requestBody);

        try {
            // Send the POST request to the chatbot API
            $response = $client->post($botURL, $requestBody);

            // Handle the response from the bot
            $responseData = json_decode($response->getBody()->getContents(), true);
            Log::info('=====Bot Response=============');
            logger('Bot response:', $responseData);
            Log::info('==================');
            if(isset($responseData['updated_history'])) {
                logger('Updated History:', $responseData['updated_history']);
                $chatHistory->updated_history = $responseData['updated_history'];
                $chatHistory->save();
                $responseMessage = $responseData['response'];
                $message = $this->fixHashes($responseMessage);

                $processedMessage = $this->processMessage($message);
                ChatMessage::create([
                    'user_id' => $user->id,
                    'chat_id' => $this->chatId,
                    'message' => $processedMessage,
                ]);

                MessageSent::dispatch($user, $responseMessage, $this->chatId, 'human');
            }
            logger('Bot response:', $responseData);

            // You can process $responseData further as needed
        } catch (GuzzleException $e) {
            logger('Guzzle exception:', (array)$e->getMessage());
        }
    }

        public function fixHashes($message): string
        {
            // Case 2: Starting hash missing, end hash exists
            return preg_replace_callback(
                '/(https?:\/\/[^\s]+)\s([^#.,]+)#/',
                function ($matches) {
                    return $matches[1] . " #" . $matches[2] . "#";
                },
                $message
            );
        }


    public function processMessage($message): string
    {
        $urlWithLabelRegex = '/(https?:\/\/[^\s]+)\s#([^#]+)#/';

        return preg_replace_callback($urlWithLabelRegex, function ($matches) {
            $url = $matches[1];
            $label = $matches[2];
            return '<a href="' . htmlspecialchars($url, ENT_QUOTES) . '" target="_blank" rel="noopener noreferrer">' . htmlspecialchars($label, ENT_QUOTES) . '</a>';
        }, $message);
    }
}
