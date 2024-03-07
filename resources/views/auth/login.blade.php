{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}



@extends('layouts.base')

@section('content')

    <style>
        input [type="text"]:focus,
        [type="email"]:focus,
        [type="url"]:focus,
        [type="password"]:focus,
        [type="number"]:focus,
        [type="date"]:focus,
        [type="datetime-local"]:focus,
        [type="month"]:focus,
        [type="search"]:focus,
        [type="tel"]:focus,
        [type="time"]:focus,
        [type="week"]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:hover,
        [type="email"]:hover,
        [type="url"]:hover,
        [type="password"]:hover,
        [type="number"]:hover,
        [type="date"]:hover,
        [type="datetime-local"]:hover,
        [type="month"]:hover,
        [type="search"]:hover,
        [type="tel"]:hover,
        [type="time"]:hover,
        [type="week"]:hover,
        [multiple]:hover,
        textarea:hover,
        select:hover {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:active,
        [type="email"]:active,
        [type="url"]:active,
        [type="password"]:active,
        [type="number"]:active,
        [type="date"]:active,
        [type="datetime-local"]:active,
        [type="month"]:active,
        [type="search"]:active,
        [type="tel"]:active,
        [type="time"]:active,
        [type="week"]:active,
        [multiple]:active,
        textarea:active,
        select:active {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }
    </style>
    <!-- Log In Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="login-title">
                        <h2>Login</h2>
                    </div>
                    <div class="input">
                        <label for="name">Username</label>
                        <input type="email" id="name" name="email" :value="old('email')" required="" autofocus="" autocomplete="name">
                        @error('email') <span class="text-danger mt-3">{{$message}}</span> @enderror
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input type="password" id="pass" class="block mt-1 w-full" name="password" required="" autocomplete="current-password">
                        @error('password') <span class="text-danger mt-3">{{$message}}</span> @enderror
                    </div>

                    <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a>

                    <div class="button login">
                        <button type="submit">
                            <span>Log In</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>

                    <p>Not a member? <a href="{{route('register')}}" class="theme-color">Sign up now</a></p>
                </form>
            </div>
        </div>
    </div>
    <!-- Log In Section End -->

@endsection
