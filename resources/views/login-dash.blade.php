@extends('layouts.app')

@section('content')

    <!-- Taliwind Nav - AIFX -->
    <x-main-nav></x-main-nav>



    <div class="flex flex-col justify-center min-h-screen py-12 bg-std dark:bg-dark sm:px-6 lg:px-8">


        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="mb-20">
                    <a href="{{ route('home') }}" class="">
                        <img src="{{ url(asset('storage/img/logos/aifx-branding.png')) }}" class="mx-auto" alt="AiFx">
                    </a>
                </div>
                <div class="mb-5">
                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-dark hover:text-hover dark:text-std dark:hover:text-hover">
                        {{ config('app.name') }}
                    </h1>
                </div>
            </div>
        </div>

        <!--Features1 - AIFX -->
        <x-features1></x-features1>

        <!--Hover Cards - AIFX -->
        <x-hover-card></x-hover-card>

        <!--CoolCard - AIFX-->
        <x-cool-card></x-cool-card>

        <!--Mobile Application Advert - AIFX-->
        <x-mobile-advert></x-mobile-advert>

        <!-- PRICING CARDS - AIFX -->
        <x-pricing-cards></x-pricing-cards>

        <x-tall-stack></x-tall-stack>

    </div>

    <x-footer></x-footer>

@endsection
