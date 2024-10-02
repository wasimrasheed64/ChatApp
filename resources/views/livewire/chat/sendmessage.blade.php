<?php

use App\Events\MessageSent;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Reactive;
use Livewire\Volt\Component;

new class extends Component {
    #[Reactive]
    public $chatId;
    public string $newMessage = '';


    public function mount($chatId)
    {
        $this->chatId = $chatId;
    }

    public function addMessage(): void
    {
        $user = Auth::user();
        ChatMessage::create([
            'user_id' => $user->id,
            'chat_id' => $this->chatId,
            'message' => $this->newMessage
        ]);
        MessageSent::dispatch($user ,$this->newMessage,$this->chatId);
        $this->reset('newMessage');
    }

}
?>

<div>
    <div class="chat-history-footer shadow-xs">
        <form wire:submit.prevent="addMessage" class="d-flex justify-content-between align-items-center">
            <input
                wire:model="newMessage"
                class="form-control message-input border-0 me-4 shadow-none"
                placeholder="Type your message here..."/>
            <div class="message-actions d-flex align-items-center">
                <button class="btn btn-primary d-flex send-msg-btn">
                    <span class="align-middle d-md-inline-block d-none">Send</span>
                    <i class="ti ti-send ti-16px ms-md-2 ms-0"></i>
                </button>
            </div>
        </form>
    </div>
</div>
