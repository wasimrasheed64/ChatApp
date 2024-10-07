<?php

use App\Models\User;
use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    public $user;

    public function mount()
    {
        $this->user = User::find(2);
    }

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }



}
?>
<div>
    <div class="chat-history-header border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex overflow-hidden align-items-center">
                @if($user)
                    <i
                        class="ti ti-menu-2 ti-lg cursor-pointer d-lg-none d-block me-4"
                        data-bs-toggle="sidebar"
                        data-overlay
                        data-target="#app-chat-contacts"></i>
                    <div class="flex-shrink-0 avatar avatar-online">
                        <img
                            src="{{ $user->avatar }}"
                            alt="Avatar"
                            class="rounded-circle"
                            data-bs-toggle="sidebar"
                            data-overlay
                            data-target="#app-chat-sidebar-right"/>
                    </div>
                    <div class="chat-contact-info flex-grow-1 ms-4">
                        <h6 class="m-0 fw-normal">

                            {{ $user->name }}</h6>
                        <small class="user-status text-body">{{ $user->bio }}</small>
                    </div>
                @endif
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <button
                        class="btn btn-sm btn-icon btn-text-secondary text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown"
                        aria-expanded="true"
                        id="chat-header-actions">
                        <i class="ti ti-dots-vertical ti-md"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="chat-header-actions">
                        <a class="dropdown-item" wire:click="logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
