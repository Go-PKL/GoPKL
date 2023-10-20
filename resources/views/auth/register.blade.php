{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>

</head>

<body class="bg-gray-100">
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
                    <input id="name" class="p-2 border border-[#00000080] rounded-md focus:outline-none"
                        type="text" name="name" required autofocus autocomplete="name" placeholder="go_pkl">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <x-input-label class="pt-2" for="email" :value="__('Email')" />
                    <input id="email" class="p-2 border border-[#00000080] rounded-md focus:outline-none"
                        type="email" name="email" required autocomplete="username" placeholder="contoh@gmail.com">
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
</body>

</html>
