<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Security-Policy"
              content="upgrade-insecure-requests">

        <title>Dentism</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


        <!-- Livewire Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                margin: 0;
                min-height: 100vh;
                font-family: 'Nunito', sans-serif;
            }

            /* Top Navigation Bar */
            .topbar {
                background-color: #f8f9fa;
                z-index: 1000; /* Ensure it stays above other content */
                width: 100%; /* Make it full width */
                position: fixed; /* Fix it to the top */
                top: 0;
                left: 0;
            }

            /* Sidebar */
            .sidebar {
                width: 220px;
                position: fixed;
                top: 90px; /* Adjust to fit your top navigation height */
                left: 0;
                bottom: 0;
                overflow-y: auto;
                transition: width 0.3s ease;
                background-color: #f8f9fa;
                z-index: 1000;
                padding-top: 10px;
            }

            /* Sidebar Content Hidden When Collapsed */
            .sidebar-content {
                display: block;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }

            .collapsed .sidebar-content {
                max-height: 0;
                overflow: hidden;
            }

            /* Main Content */
            #content {
                margin-top: 5px; /* Offset for the top navigation bar */
                margin-left: 220px; /* Default sidebar width */
                padding: 20px;
                transition: margin-left 0.3s ease;
            }

            /* Adjust content when sidebar is collapsed */
            .collapsed #content {
                margin-left: 60px; /* Collapsed sidebar width */
            }


            /* Toggle Button */
            .toggle-btn {
                margin: 0 10px;
                background-color: transparent;
                border: none;
                font-size: 24px;
                cursor: pointer;
            }

            /* Sidebar Collapsed */
            .collapsed .sidebar {
                width: 60px;
            }

            /* Sidebar Collapsed Links Text Hidden */
            .collapsed .sidebar-content a {
                display: none;
            }

            /* Sidebar Collapsed Buttons */
            .collapsed .sidebar-content div {
                text-align: center;
            }

        </style>
    </head>
    <body>
    @include('layouts.topbar')
    <!-- Main Content -->
    <div id="content">
        <!-- Livewire Component Injection Point -->
        <main>
            {{ $slot }}
        </main>

        <!-- Content from other files (Blade Views) -->
        @yield('content')

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Function to toggle the sidebar
                document.getElementById('toggleSidebar')?.addEventListener('click', function () {
                    document.body.classList.toggle('collapsed');
                    // Optionally force a reflow for browsers
                    document.getElementById('content').offsetWidth;
                });
            });
        </script>

        @livewireScripts

    </div>
    </body>
</html>
