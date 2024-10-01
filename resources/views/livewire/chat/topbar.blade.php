<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="sidebar-header h-px-75 px-5 border-bottom d-flex align-items-center">
        <div class="d-flex align-items-center me-6 me-lg-0">
            <div
                class="flex-shrink-0 avatar avatar-online me-4"
                data-bs-toggle="sidebar"
                data-overlay="app-overlay-ex"
                data-target="#app-chat-sidebar-left">
                <img
                    class="user-avatar rounded-circle cursor-pointer"
                    src="{{auth()->user()->avatar  }}"
                    alt="Avatar" />
            </div>
            <div class="chat-contact-info flex-grow-1 ms-4">
                <h6 class="chat-contact-name text-truncate m-0 fw-normal">{{ auth()->user()->name }}</h6>
                <small class="chat-contact-status text-truncate">{{ auth()->user()->bio  }}</small>
            </div>
            <div class="flex-grow-1 input-group input-group-merge">
{{--                <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>--}}
{{--                <input--}}
{{--                    type="text"--}}
{{--                    class="form-control chat-search-input"--}}
{{--                    placeholder="Search..."--}}
{{--                    aria-label="Search..."--}}
{{--                    aria-describedby="basic-addon-search31" />--}}
            </div>
        </div>
        <i
            class="ti ti-x ti-lg cursor-pointer position-absolute top-50 end-0 translate-middle d-lg-none d-block"
            data-overlay
            data-bs-toggle="sidebar"
            data-target="#app-chat-contacts"></i>
    </div>
</div>
