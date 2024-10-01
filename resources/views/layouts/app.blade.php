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
                       <livewire:chat.sidebar />
                    </div>
                    <!-- /Chat contacts -->
                    <!-- Chat History -->
                    <div class="col app-chat-history">
                        <livewire:chat.history></livewire:chat.history>
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
