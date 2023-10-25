<title>Daftar</title>
@extends('layouts.template')
@section('content')
    <section class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col items-center max-w-3xl bg-white shadow-2xl md:flex md:flex-row rounded-2xl">
            <div class="flex flex-col p-4 md:hidden">
                <img class="h-56 w-52 rounded-2xl" src="/assets/images/background.jpg">
            </div>
            <div class="px-8 py-2 md:w-1/2 md:px-14">
                <h2 class="font-bold text-2xl text-[#000000] text-center">Hello !</h2>
                <p class="text-sm text-[#00000080] text-center">Hello | Silahkan masukkan data anda</p>

                <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-1 mt-4 text-[#000000]">
                    @csrf

                    <x-input-label class="pt-2" for="name" :value="__('Username')" />
                    <input id="name" class="p-2 border border-[#00000080] rounded-md focus:outline-none" type="text"
                        name="name" required autofocus autocomplete="name" placeholder="go_pkl">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <x-input-label class="pt-2" for="email" :value="__('Email')" />
                    <input id="email" class="p-2 border border-[#00000080] rounded-md focus:outline-none" type="email"
                        name="email" required autocomplete="username" placeholder="contoh@gmail.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <x-input-label class="pt-2" for="password" :value="__('Password')" />
                    <input id="password" class="p-2 border border-[#00000080] rounded-md focus:outline-none w-full"
                        type="password" name="password" required autocomplete="new-password" placeholder="********">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <x-input-label class="pt-2" for="password_confirmation" :value="__('Konfirmasi Password')" />
                    <x-text-input id="password_confirmation"
                        class="p-2 border border-[#00000080] rounded-md focus:outline-none w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" placeholder="********" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                    <button type="submit"
                        class="bg-[#0F044C] rounded-md text-white mt-3 py-2 hover:scale-105 duration-300">{{ __('Daftar') }}</button>
                </form>

                <div class="flex items-center justify-between mt-3 text-xs">
                    <p class="text-[##00000080]">kamu sudah punya akun ?</p>
                    @if (Route::has('register'))
                        <a class="py-2 px-5 bg-white border text-[#000000] rounded-md shadow-md hover:scale-110 duration-300"
                            href="{{ route('login') }}">Masuk
                        </a>
                    @endif
                </div>
            </div>

            <div class="hidden w-1/2 md:block rounded-r-2xl">
                <img class="w-full h-[494px] rounded-r-2xl" src="/assets/images/background.jpg">
            </div>
        </div>
    </section>
@endsection
