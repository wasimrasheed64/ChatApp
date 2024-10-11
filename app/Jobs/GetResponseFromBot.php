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
        Log::info('==================');
        Log::info($botURL);
        Log::info('==================');
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
            logger('Bot response:', $responseData);
            if(isset($responseData['updated_history'])) {
                $chatHistory->updated_history = $responseData['updated_history'];
                $chatHistory->save();
                $responseMessage = $responseData['response'];
                ChatMessage::create([
                    'user_id' => $user->id,
                    'chat_id' => $this->chatId,
                    'message' => $responseMessage,
                ]);

                MessageSent::dispatch($user, $responseMessage, $this->chatId, 'human');
            }
            logger('Bot response:', $responseData);

            // You can process $responseData further as needed
        } catch (GuzzleException $e) {
            logger('Guzzle exception:', $e->getMessage());
        }
    }

}
