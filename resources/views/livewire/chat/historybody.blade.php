<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Reactive;
new class extends Component {
    #[Reactive]
    public $chatMessages = [];

    public function mount($chatMessages){
        $this->chatMessages = $chatMessages;
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
                            <img src="{{ $chatMessage->user->avatar }}" alt="Avatar" class="rounded-circle" />
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
