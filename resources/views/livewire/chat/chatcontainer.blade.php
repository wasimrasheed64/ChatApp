<?php

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public  $chatSelected ;

    #[On('contact-selected')]
    public function updateSelectedContact($selectedContact): void
    {
        $authUser = Auth::user();
        $chat = \App\Models\Chat::select('chats.*')
            ->join('chat_users', 'chats.id', '=', 'chat_users.chat_id')
            ->join('users', 'chat_users.user_id', '=', 'users.id')
            ->whereIn('users.id', [$authUser->id, $selectedContact]) // Check if both users are in the chat
            ->groupBy('chats.id') // Group by chat ID
            ->havingRaw('COUNT(users.id) = 2') // Ensure both users are present
            ->first();
        if (!$chat) {
            $chat = Chat::create(['name' => 'user_chat' . $selectedContact . '-' . $authUser->id]);
            $chat->users()->sync([$selectedContact,$authUser->id]);
            $this->dispatch('chat-updated');
        }
    }

    #[On('chat-id-updated')]
    public function chatListUpdated($chatId): void
    {
        $this->chatSelected = $chatId;
        $this->dispatch('get-chat-user',$chatId);
    }
};
?>
<div>
    <div class="row g-0">
        <!-- Chat & Contacts -->
        <div
            class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end"
            id="app-chat-contacts">
            <livewire:chat.topbar></livewire:chat.topbar>
            <livewire:chat.chatlist></livewire:chat.chatlist>
        </div>
        <!-- /Chat contacts -->
        <!-- Chat History -->
        <div class="col app-chat-history" >
            <livewire:chat.history></livewire:chat.history>
        </div>
        <!-- /Chat History -->
        <div class="app-overlay"></div>
    </div>
</div>
