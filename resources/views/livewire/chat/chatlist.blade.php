<?php

use App\Models\Chat;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public $chats;
    public $selectedChat;

    public function mount()
    {
        $this->loadChats();
    }

    public function loadChats()
    {
        $authUser = auth()->user();
        $chatIds = $authUser->chats->pluck('id');

        $this->chats = Chat::whereHas('chatUsers', function ($query) use ($chatIds, $authUser) {
            $query->whereIn('chat_id', $chatIds)->where('user_id', '!=', $authUser->id);
        })
            ->with(['users' => function ($q) use ($authUser) {
                $q->where('users.id', '!=', $authUser->id);
            }])
            ->get();
    }

    public function chatSelected($chatId)
    {
        $this->selectedChat = $chatId;
        $this->dispatch('chat-selected', $chatId);
    }

    #[On('contact-selected')]
    public function chatListUpdated()
    {
        $this->loadChats();
        $this->dispatch('chat-list-updated');
    }
};
?>

<div>
    <div class="sidebar-body">
        <!-- Chats -->
        <ul class="list-unstyled chat-contact-list py-2 mb-0" id="chat-list">
            <li class="chat-contact-list-item chat-contact-list-item-title mt-0">
                <h5 class="text-primary mb-0">Chats</h5>
            </li>
            @forelse ($chats as $chat)
                <li wire:click="chatSelected({{ $chat->id }})"  class="chat-contact-list-item mb-1 {{ $this->selectedChat == $chat->id ? 'active' : '' }}">
                    <a class="d-flex align-items-center">
                        <div class="flex-shrink-0 avatar {{ $chat->status ? 'avatar-online' : 'avatar-offline' }}">
                            <img src="{{ $chat->users->first()->avatar ?? 'default-avatar.png' }}" alt="Avatar" class="rounded-circle"/>
                        </div>
                        <div class="chat-contact-info flex-grow-1 ms-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="chat-contact-name text-truncate m-0 fw-normal">{{ $chat->users->first()->name }}</h6>
                                <small class="text-muted">{{ $chat->users->first()->last_active }}</small>
                            </div>
                            {{-- Uncomment below if you want to show the last message text --}}
                            {{-- <small class="chat-contact-status text-truncate">{{ $chat->last_message_text }}</small> --}}
                        </div>
                    </a>
                </li>
            @empty
                <li class="chat-contact-list-item chat-list-item-0">
                    <h6 class="text-muted mb-0">No Chats Found</h6>
                </li>
            @endforelse


        </ul>
        <!-- Contacts -->
        <livewire:chat.contacts></livewire:chat.contacts>
    </div>
</div>
