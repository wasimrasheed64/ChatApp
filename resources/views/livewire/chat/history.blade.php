<?php

use App\Models\ChatMessage;
use App\Models\ChatUser;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public $chatSelected;
    public $chatUser;
    public $chatMessages;

    #[On('chat-selected')]
    public function chatListUpdated($chatId)
    {
        $this->chatSelected = $chatId;
        $this->getChatUser($chatId);
        $this->getChatMessages($chatId);
    }

    public function getChatUser($chatId)
    {
        $authUserId = auth()->user()->id;
        $this->chatUser = ChatUser::where('chat_id',$chatId)
            ->where('user_id', '!=', $authUserId)
            ->with('user')
            ->first();
    }

    public function getChatMessages($chatId)
    {
        $this->chatMessages = ChatMessage::where('chat_id',$chatId)->get();
    }
}
?>

<div>
    <div class="chat-history-wrapper">
        <livewire:chat.historyheader :chatUser="$chatUser"></livewire:chat.historyheader>
        <livewire:chat.historybody :chatMessages="$chatMessages"></livewire:chat.historybody>
        <livewire:chat.sendmessage :chatId="$chatSelected"></livewire:chat.sendmessage>
    </div>
</div>
