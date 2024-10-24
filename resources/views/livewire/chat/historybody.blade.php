<?php

use App\Jobs\GetResponseFromBot;
use App\Models\Chat;
use App\Models\ChatMessage;
use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component {

    public $chatMessages = [];
    public $chatSelected;
    public $typing;

    public function mount(): void
    {
        $this->chatSelected = \Illuminate\Support\Facades\Auth::user()->chats()->first()->id;
        $this->getChatMessages($this->chatSelected);
    }


    public function getChatMessages($chatId): void
    {
        $this->chatMessages = ChatMessage::with('user')
            ->where('chat_id', $chatId)
            ->orderBy('created_at', 'desc')
            ->take(40)
            ->get()
            ->sortBy('created_at');
        $this->dispatch('chatUpdated');
    }

    #[On('chat-list-clear')]
    public function clearChat()
    {
        $chat = Chat::find($this->chatSelected);
        $chat->updated_history = null;
        $chat->save();
        ChatMessage::where('chat_id',$this->chatSelected)
                    ->delete();
    }

    #[On('download-file')]
    public function downloadFile()
    {
        return redirect()->route('chat.download', [$this->chatSelected]);
    }

    #[On('sent-message-to-bot')]
    public function sendMessage($chatId, $message)
    {
        GetResponseFromBot::dispatch($chatId, $message);
    }

    #[On('echo-private:messages.{chatSelected},MessageSent')]
    public function onMessageSent($event): void
    {
        if ($event['type'] == 'bot') {
            $this->sendMessage($event['chatId'], $event['text']);
        }else{
            $this->dispatch('stop-typing');
        }
        $this->getChatMessages($event['chatId']);
    }
}
?>
<div>
    <div class="chat-history-body" id="historyBody">
        <ul class="list-unstyled chat-history">
            @if($chatMessages)
                @foreach($chatMessages as $chatMessage)
                    <li class="chat-message {{ $chatMessage->user->id === auth()->user()->id ? 'chat-message-right' : '' }}">
                        <div
                            class="user-avatar flex-shrink-0 ms-4 {{ $chatMessage->user->id === auth()->user()->id ? 'd-none' : '' }}">
                            <div class="avatar avatar-sm">
                                <img src="{{ $chatMessage->user->avatar }}" alt="Avatar" class="rounded-circle"/>
                            </div>
                        </div>
                        <div class="d-flex overflow-hidden">
                            <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                    <p class="mb-0">
                                        {{ $chatMessage->message }}
                                    </p>
                                </div>
                                <div class="text-end text-muted mt-1">
                                    <small>{{ \Illuminate\Support\Carbon::parse($chatMessage->created_at)->diffForHumans() }}</small>
                                </div>
                            </div>
                            <div
                                class="user-avatar flex-shrink-0 ms-4 {{ $chatMessage->user->id === auth()->user()->id ?  '' :'d-none' }}">
                                <div class="avatar avatar-sm">
                                    <img src="{{ $chatMessage->user->avatar }}" alt="Avatar" class="rounded-circle"/>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @else
                <li class="chat-message"> No Chat Selected</li>
            @endif
        </ul>
    </div>
</div>

<script>
    var chatHistoryBody = document.querySelector('.chat-history-body');
    document.addEventListener('livewire:init', function () {
        Livewire.on('chatUpdated', () => {
            let mContainer = document.getElementById("historyBody");
            console.log('working');
            setTimeout(function () {
                scrollToBottom();
            }, 2000);
        });
    });

    function scrollToBottom() {
        chatHistoryBody.scrollTo(0, chatHistoryBody.scrollHeight);
    }

    scrollToBottom();
</script>

