@extends('admin.inc.main_auth')
@section('title', 'Auto Locked')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('admin.inc._auth_header')
        {{--         <a href="/page_auth_register" class="btn-link text-white ml-auto">
            Create Account
        </a> --}}
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-link text-white ml-auto">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-link text-white ml-auto  mr-2">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-link text-white">Register</a>
                @endif
            @endauth
        @endif
    @endcomponent
    <div class="d-flex flex-1"
        style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div
            class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
            <div class="text-center text-white mb-5 pb-5">
                <div class="py-3">
                    <div class='icon-stack display-1 flex-shrink-0 d-block m-auto'>
                        <i class="fal fa-circle icon-stack-4x opacity-100 color-primary-400"></i>
                        <i class="fas fa-graduation-cap icon-stack-1x opacity-100 color-primary-500"></i>
                    </div>
                </div>
                <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                    LAPORAN CAPAIAN PEMBELAJARAN SISWA
                    <small class="h3 fw-300 mt-3 mb-5 text-white opacity-70 hidden-sm-down">
                        <strong>SMKN 1 KADIPATEN</strong>
                    </small>
                </h2>
                <p class="text-white opacity-50">Enter password to unlock screen</p>
                <div class="text-center">
                    <a href="/page_auth_login_alt" class="text-white opacity-90">Not Dr. Codex Lantern ?</a>
                </div>
            </div>

            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_nama ?? '' }} by&nbsp;<a
                    href='https://www.gotbootstrap.com' class='text-white opacity-40 fw-500' title='gotbootstrap.com'
                    target='_blank'>gotbootstrap.com</a>
            </div>
        </div>
    </div>
@endsection
@section('pages-script')
    <script>
        $("#js-login-btn").click(function(event) {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });
    </script>
@endsection
