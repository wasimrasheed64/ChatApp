<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
            rel="stylesheet" />

        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css')}}" />

        <!-- Core CSS -->

        <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css'" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />

        <link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css')}}" />

        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css')}}" />

        <!-- Page CSS -->

        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-chat.css')}}" />

        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{ asset('assets/vendor/js/template-customizer.js')}}"></script>

        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/js/config.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
            <div class="layout-page">
            <!-- Content -->
            <div class="app-chat card">
                <div class="row g-0">
                    <!-- Chat & Contacts -->
                    <div
                        class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end"
                        id="app-chat-contacts">
                        <div class="sidebar-header h-px-75 px-5 border-bottom d-flex align-items-center">
                            <div class="d-flex align-items-center me-6 me-lg-0">
                                <div
                                    class="flex-shrink-0 avatar avatar-online me-4"
                                    data-bs-toggle="sidebar"
                                    data-overlay="app-overlay-ex"
                                    data-target="#app-chat-sidebar-left">
                                    <img
                                        class="user-avatar rounded-circle cursor-pointer"
                                        src="../../assets/img/avatars/1.png"
                                        alt="Avatar" />
                                </div>
                                <div class="flex-grow-1 input-group input-group-merge">
                                    <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>
                                    <input
                                        type="text"
                                        class="form-control chat-search-input"
                                        placeholder="Search..."
                                        aria-label="Search..."
                                        aria-describedby="basic-addon-search31" />
                                </div>
                            </div>
                            <i
                                class="ti ti-x ti-lg cursor-pointer position-absolute top-50 end-0 translate-middle d-lg-none d-block"
                                data-overlay
                                data-bs-toggle="sidebar"
                                data-target="#app-chat-contacts"></i>
                        </div>
                        <div class="sidebar-body">
                            <!-- Chats -->
                            <ul class="list-unstyled chat-contact-list py-2 mb-0" id="chat-list">
                                <li class="chat-contact-list-item chat-contact-list-item-title mt-0">
                                    <h5 class="text-primary mb-0">Chats</h5>
                                </li>
                                <li class="chat-contact-list-item chat-list-item-0 d-none">
                                    <h6 class="text-muted mb-0">No Chats Found</h6>
                                </li>
                                <li class="chat-contact-list-item mb-1">
                                    <a class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar avatar-online">
                                            <img src="../../assets/img/avatars/13.png" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="chat-contact-info flex-grow-1 ms-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="chat-contact-name text-truncate m-0 fw-normal">Waldemar Mannering</h6>
                                                <small class="text-muted">5 Minutes</small>
                                            </div>
                                            <small class="chat-contact-status text-truncate">Refer friends. Get rewards.</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="chat-contact-list-item active mb-1">
                                    <a class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar avatar-offline">
                                            <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <div class="chat-contact-info flex-grow-1 ms-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="chat-contact-name text-truncate fw-normal m-0">Felecia Rower</h6>
                                                <small class="text-muted">30 Minutes</small>
                                            </div>
                                            <small class="chat-contact-status text-truncate">I will purchase it for sure. 👍</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="chat-contact-list-item mb-0">
                                    <a class="d-flex align-items-center">
                                        <div class="flex-shrink-0 avatar avatar-busy">
                                            <span class="avatar-initial rounded-circle bg-label-success">CM</span>
                                        </div>
                                        <div class="chat-contact-info flex-grow-1 ms-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="chat-contact-name text-truncate fw-normal m-0">Calvin Moore</h6>
                                                <small class="text-muted">1 Day</small>
                                            </div>
                                            <small class="chat-contact-status text-truncate"
                                            >If it takes long you can mail inbox user</small
                                            >
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- Contacts -->
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
                    </div>
                    <!-- /Chat contacts -->

                    <!-- Chat History -->
                    <div class="col app-chat-history">
                        <div class="chat-history-wrapper">
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
                            <!-- Chat message form -->
                            <div class="chat-history-footer shadow-xs">
                                <form class="form-send-message d-flex justify-content-between align-items-center">
                                    <input
                                        class="form-control message-input border-0 me-4 shadow-none"
                                        placeholder="Type your message here..." />
                                    <div class="message-actions d-flex align-items-center">
                                        <i
                                            class="speech-to-text ti ti-microphone ti-md btn btn-sm btn-text-secondary btn-icon rounded-pill cursor-pointer text-heading"></i>
                                        <label for="attach-doc" class="form-label mb-0">
                                            <i
                                                class="ti ti-paperclip ti-md cursor-pointer btn btn-sm btn-text-secondary btn-icon rounded-pill mx-1 text-heading"></i>
                                            <input type="file" id="attach-doc" hidden />
                                        </label>
                                        <button class="btn btn-primary d-flex send-msg-btn">
                                            <span class="align-middle d-md-inline-block d-none">Send</span>
                                            <i class="ti ti-send ti-16px ms-md-2 ms-0"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Chat History -->
                    <div class="app-overlay"></div>
                </div>
            </div>
            </div>

            <!-- / Content -->
            <!-- Layout container -->
    </div>
    <!-- / Layout wrapper -->

        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>


        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Page JS -->
        <script src="{{ asset('assets/js/app-chat.js') }}"></script>
    </body>
</html>
