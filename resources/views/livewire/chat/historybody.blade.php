<?php

use App\Models\ChatMessage;
use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component {

    public $chatMessages = [];
    public $chatSelected ;

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
    }

    #[On('echo-private:messages.{chatSelected},MessageSent')]
    public function onMessageSent($event): void
    {
        $this->getChatMessages($event['chatId']);
    }
}
?>
<div>
    <div class="chat-history-body">
        <ul class="list-unstyled chat-history">
            @if($chatMessages)
                @foreach($chatMessages as $chatMessage)
                    <li class="chat-message {{ $chatMessage->user->id === auth()->user()->id ? 'chat-message-right' : '' }}">
                        <div class="d-flex overflow-hidden">
                            <div class="chat-message-wrapper flex-grow-1">
                                <div class="chat-message-text">
                                    <p class="mb-0">
                                        {{ $chatMessage->message }}
                                    </p>
                                </div>
                                <div class="text-end text-muted mt-1">
                                    <small>{{ $chatMessage->created_at }}</small>
                                </div>
                            </div>
                            <div class="user-avatar flex-shrink-0 ms-4">
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
