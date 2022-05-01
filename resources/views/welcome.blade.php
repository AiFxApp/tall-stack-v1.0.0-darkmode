@extends('layouts.app')

@section('content')
    <x-land-nav></x-land-nav>

    <div class="flex flex-col justify-center min-h-screen py-12 bg-std dark:bg-dark sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="mb-5">
                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-dark hover:text-hover dark:text-std dark:hover:text-hover">
                        {{ config('app.name') }}
                    </h1>
                </div>
                <x-tall-stack></x-tall-stack>
            </div>
        </div>
    </div>

    <x-signin-cta></x-signin-cta>

    <x-footer></x-footer>

@endsection
