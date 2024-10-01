<?php

use function Livewire\Volt\{state};

//

?>

<div>
    <div class="chat-history-header border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex overflow-hidden align-items-center">
                <i
                    class="ti ti-menu-2 ti-lg cursor-pointer d-lg-none d-block me-4"
                    data-bs-toggle="sidebar"
                    data-overlay
                    data-target="#app-chat-contacts"></i>
                <div class="flex-shrink-0 avatar avatar-online">
                    <img
                        src="../../assets/img/avatars/4.png"
                        alt="Avatar"
                        class="rounded-circle"
                        data-bs-toggle="sidebar"
                        data-overlay
                        data-target="#app-chat-sidebar-right" />
                </div>
                <div class="chat-contact-info flex-grow-1 ms-4">
                    <h6 class="m-0 fw-normal">Felecia Rower</h6>
                    <small class="user-status text-body">NextJS developer</small>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <i
                    class="ti ti-phone ti-md cursor-pointer d-sm-inline-flex d-none me-1 btn btn-sm btn-text-secondary text-secondary btn-icon rounded-pill"></i>
                <i
                    class="ti ti-video ti-md cursor-pointer d-sm-inline-flex d-none me-1 btn btn-sm btn-text-secondary text-secondary btn-icon rounded-pill"></i>
                <i
                    class="ti ti-search ti-md cursor-pointer d-sm-inline-flex d-none me-1 btn btn-sm btn-text-secondary text-secondary btn-icon rounded-pill"></i>
                <div class="dropdown">
                    <button
                        class="btn btn-sm btn-icon btn-text-secondary text-secondary rounded-pill dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown"
                        aria-expanded="true"
                        id="chat-header-actions">
                        <i class="ti ti-dots-vertical ti-md"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="chat-header-actions">
                        <a class="dropdown-item" href="javascript:void(0);">View Contact</a>
                        <a class="dropdown-item" href="javascript:void(0);">Mute Notifications</a>
                        <a class="dropdown-item" href="javascript:void(0);">Block Contact</a>
                        <a class="dropdown-item" href="javascript:void(0);">Clear Chat</a>
                        <a class="dropdown-item" href="javascript:void(0);">Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
