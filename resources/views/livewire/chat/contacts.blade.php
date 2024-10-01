<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <ul class="list-unstyled chat-contact-list mb-0 py-2" id="contact-list">
        <li class="chat-contact-list-item chat-contact-list-item-title mt-0">
            <h5 class="text-primary mb-0">Contacts</h5>
        </li>
        <li class="chat-contact-list-item contact-list-item-0 d-none">
            <h6 class="text-muted mb-0">No Contacts Found</h6>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Natalie Maxwell</h6>
                    <small class="chat-contact-status text-truncate">UI/UX Designer</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Jess Cook</h6>
                    <small class="chat-contact-status text-truncate">Business Analyst</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="avatar d-block flex-shrink-0">
                    <span class="avatar-initial rounded-circle bg-label-primary">LM</span>
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Louie Mason</h6>
                    <small class="chat-contact-status text-truncate">Resource Manager</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Krystal Norton</h6>
                    <small class="chat-contact-status text-truncate">Business Executive</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/8.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Stacy Garrison</h6>
                    <small class="chat-contact-status text-truncate">Marketing Ninja</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="avatar d-block flex-shrink-0">
                    <span class="avatar-initial rounded-circle bg-label-success">CM</span>
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Calvin Moore</h6>
                    <small class="chat-contact-status text-truncate">UX Engineer</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/10.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Mary Giles</h6>
                    <small class="chat-contact-status text-truncate">Account Department</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/13.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Waldemar Mannering</h6>
                    <small class="chat-contact-status text-truncate">AWS Support</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="avatar d-block flex-shrink-0">
                    <span class="avatar-initial rounded-circle bg-label-danger">AJ</span>
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Amy Johnson</h6>
                    <small class="chat-contact-status text-truncate">Frontend Developer</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">Felecia Rower</h6>
                    <small class="chat-contact-status text-truncate">Cloud Engineer</small>
                </div>
            </a>
        </li>
        <li class="chat-contact-list-item mb-0">
            <a class="d-flex align-items-center">
                <div class="flex-shrink-0 avatar">
                    <img src="../../assets/img/avatars/11.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="chat-contact-name text-truncate m-0 fw-normal">William Stephens</h6>
                    <small class="chat-contact-status text-truncate">Backend Developer</small>
                </div>
            </a>
        </li>
    </ul>
</div>
