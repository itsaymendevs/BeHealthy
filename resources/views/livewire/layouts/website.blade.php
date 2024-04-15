<!DOCTYPE html>
<html lang="en">

    {{-- head --}}

    <head>

        {{-- meta --}}
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
        <title>Aleens.</title>

        <meta name="description" content="Aleens">
        <meta name="keywords" content="Aleens">
        <meta name="author" content="TRUTH. SOLUTIONS">



        {{-- icons --}}
        {{--
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('safari-pinned-tab.svg')}}" color="#000000">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="theme-color" content="#000000"> --}}







        {{-- styles --}}
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/smart_wizard_all.min.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/air-datepicker@3.4.0/air-datepicker.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/select2-custom.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">






        @yield('styles')





        {{-- JQuery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" data-navigate-once></script>





    </head>
    {{-- end head --}}








    {{-- ----------------------------------------------------- --}}








    {{-- body --}}
    <body class="scrollbar" id='style-1'>







        {{-- navbar --}}
        <livewire:website.components.navbar />





        {{-- content --}}
        {{ $slot }}










        {{-- modals --}}
        @yield('modals')







        {{-- -------------------------------------------- --}}
        {{-- -------------------------------------------- --}}














        <!-- generalScripts -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" data-navigate-once></script>
        <script src="{{asset('assets/js/jquery.validate.js')}}" data-navigate-once></script>
        <script src="{{asset('assets/js/jquery.smartWizard.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>






        {{-- 1.2 scripts --}}
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="{{ asset('assets/js/aos.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/bs-init.js') }}"></script>
        <script src="{{ asset('assets/js/re-init-general.js') }}"></script>
        <script src="{{ asset('assets/js/re-init-select.js') }}"></script>






        {{-- 1.3: sweetAlert2 --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />






        {{-- 1.4: includeScripts --}}
        @yield('scripts')





    </body>

</html>
{{-- end html --}}