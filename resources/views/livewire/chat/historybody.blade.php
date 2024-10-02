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
            <li class="chat-message chat-message-right">
                <div class="d-flex overflow-hidden">
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">How can we help? We're here for you! 😄</p>
                        </div>
                        <div class="text-end text-muted mt-1">
                            <i class="ti ti-checks ti-16px text-success me-1"></i>
                            <small>10:00 AM</small>
                        </div>
                    </div>
                    <div class="user-avatar flex-shrink-0 ms-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message">
                <div class="d-flex overflow-hidden">
                    <div class="user-avatar flex-shrink-0 me-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">Hey John, I am looking for the best admin template.</p>
                            <p class="mb-0">Could you please help me to find it out? 🤔</p>
                        </div>
                        <div class="chat-message-text mt-2">
                            <p class="mb-0">It should be Bootstrap 5 compatible.</p>
                        </div>
                        <div class="text-muted mt-1">
                            <small>10:02 AM</small>
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message chat-message-right">
                <div class="d-flex overflow-hidden">
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">Vuexy has all the components you'll ever need in a app.</p>
                        </div>
                        <div class="text-end text-muted mt-1">
                            <i class="ti ti-checks ti-16px text-success me-1"></i>
                            <small>10:03 AM</small>
                        </div>
                    </div>
                    <div class="user-avatar flex-shrink-0 ms-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message">
                <div class="d-flex overflow-hidden">
                    <div class="user-avatar flex-shrink-0 me-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">Looks clean and fresh UI. 😃</p>
                        </div>
                        <div class="chat-message-text mt-2">
                            <p class="mb-0">It's perfect for my next project.</p>
                        </div>
                        <div class="chat-message-text mt-2">
                            <p class="mb-0">How can I purchase it?</p>
                        </div>
                        <div class="text-muted mt-1">
                            <small>10:05 AM</small>
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message chat-message-right">
                <div class="d-flex overflow-hidden">
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">Thanks, you can purchase it.</p>
                        </div>
                        <div class="text-end text-muted mt-1">
                            <i class="ti ti-checks ti-16px text-success me-1"></i>
                            <small>10:06 AM</small>
                        </div>
                    </div>
                    <div class="user-avatar flex-shrink-0 ms-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message">
                <div class="d-flex overflow-hidden">
                    <div class="user-avatar flex-shrink-0 me-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">I will purchase it for sure. 👍</p>
                        </div>
                        <div class="chat-message-text mt-2">
                            <p class="mb-0">Thanks.</p>
                        </div>
                        <div class="text-muted mt-1">
                            <small>10:08 AM</small>
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message chat-message-right">
                <div class="d-flex overflow-hidden">
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">Great, Feel free to get in touch.</p>
                        </div>
                        <div class="text-end text-muted mt-1">
                            <i class="ti ti-checks ti-16px text-success me-1"></i>
                            <small>10:10 AM</small>
                        </div>
                    </div>
                    <div class="user-avatar flex-shrink-0 ms-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message">
                <div class="d-flex overflow-hidden">
                    <div class="user-avatar flex-shrink-0 me-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text">
                            <p class="mb-0">Do you have design files for Vuexy?</p>
                        </div>
                        <div class="text-muted mt-1">
                            <small>10:15 AM</small>
                        </div>
                    </div>
                </div>
            </li>
            <li class="chat-message chat-message-right">
                <div class="d-flex overflow-hidden">
                    <div class="chat-message-wrapper flex-grow-1 w-50">
                        <div class="chat-message-text">
                            <p class="mb-0">
                                Yes that's correct documentation file, Design files are included with the template.
                            </p>
                        </div>
                        <div class="text-end text-muted mt-1">
                            <i class="ti ti-checks ti-16px me-1"></i>
                            <small>10:15 AM</small>
                        </div>
                    </div>
                    <div class="user-avatar flex-shrink-0 ms-4">
                        <div class="avatar avatar-sm">
                            <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
