<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Duralux || Dashboard')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/css/daterangepicker.min.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/theme.min.css') }}" />

    @stack('styles')
</head>

<body>
    <!-- Sidebar -->
    @include('Layouts.sidebar')

    <!-- Header -->
    @include('Layouts.header')

    <!-- Main Content -->
    <main class="nxl-container">
        <div class="nxl-content">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    @include('Layouts.footer')

    <!-- Vendors JS -->
    <script src="{{ asset('assets/admin/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/js/circle-progress.min.js') }}"></script>

    <!-- Bootstrap JS (penting untuk dropdown, modal, dll) -->
    <script src="{{ asset('assets/admin/vendors/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Apps Init -->
    <script src="{{ asset('assets/admin/js/common-init.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard-init.min.js') }}"></script>

    <!-- Theme Customizer -->
    <script src="{{ asset('assets/admin/js/theme-customizer-init.min.js') }}"></script>

    @stack('scripts')
</body>

</html>