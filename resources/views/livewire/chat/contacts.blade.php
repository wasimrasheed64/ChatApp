<?php

use App\Models\User;
use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public $contacts;

    public function mount()
    {


//        $this->contacts = User::where('id', '!=', $authUserId) // Exclude the authenticated user
//        ->whereNotIn('id', function ($query) use ($authUserId) {
//            $query->select('user_id') // Get user IDs from chat_users where the authenticated user is part of the chat
//            ->from('chat_users')
//                ->whereIn('chat_id', function ($subQuery) use ($authUserId) {
//                    $subQuery->select('chat_id') // Select chat IDs where the authenticated user is included
//                    ->from('chat_users')
//                        ->where('user_id', $authUserId);
//                });
//        })
//            ->get();
        $this->loadContacts();

    }

    public function loadContacts(){
        $authUserId = auth()->id(); // Get the currently authenticated user's ID
        $this->contacts = User::where('id', 2) // Exclude the authenticated user
        ->whereNotIn('id', function ($query) use ($authUserId) {
            $query->select('user_id') // Get user IDs from chat_users where the authenticated user is part of the chat
            ->from('chat_users')
                ->whereIn('chat_id', function ($subQuery) use ($authUserId) {
                    $subQuery->select('chat_id') // Select chat IDs where the authenticated user is included
                    ->from('chat_users')
                        ->where('user_id', $authUserId);
                });
        })
            ->get();
    }

    public function contactSeleted($chatId)
    {
        $this->dispatch('contact-selected', $chatId);
    }

    #[On('chat-list-updated')]
    public function contactListUpdated(){
        $this->loadContacts();
    }
};
?>

<div>
    <ul class="list-unstyled chat-contact-list mb-0 py-2" id="contact-list">
        <li class="chat-contact-list-item chat-contact-list-item-title mt-0">
            <h5 class="text-primary mb-0">Contacts</h5>
        </li>

        @forelse($contacts as $contact)
            <li wire:click="contactSeleted({{ $contact->id }})" class="chat-contact-list-item">
                <a class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar">
                        <img src="{{ $contact->avatar }}" alt="Avatar" class="rounded-circle"/>
                    </div>
                    <div class="chat-contact-info flex-grow-1 ms-4">
                        <h6 class="chat-contact-name text-truncate m-0 fw-normal">{{ $contact->name }}</h6>
                        <small class="chat-contact-status text-truncate">UI/UX Designer</small>
                    </div>
                </a>
            </li>
        @empty
            <li class="chat-contact-list-item contact-list-item-0">
                <h6 class="text-muted mb-0">No Contacts Found</h6>
            </li>
        @endforelse
    </ul>
</div>
