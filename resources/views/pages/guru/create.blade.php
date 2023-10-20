<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru</title>
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
            <div class="px-8 py-2 md:w-1/2 md:px-16">
                <h2 class="font-bold text-2xl text-[#000000] text-center">Hello </h2>
                {{-- {{ Auth::user()->name }} --}}
                <p class="text-sm text-[#00000080] text-center">Silahkan masukkan data berikut</p>

                <form method="POST" action="{{ route('guru.store') }}" class="flex flex-col gap-1 mt-4 text-[#000000]">
                    @csrf

                    <x-input-label class="pt-2" for="name" :value="__('Nama Lengkap')" />
                    <input id="name" class="p-2 border border-[#00000080] rounded-md focus:outline-none"
                        type="text" name="name" required autofocus autocomplete="name"
                        placeholder="Talfryn Naomi">

                    <x-input-label class="pt-2" for="jabatan" :value="__('Jabatan')" />
                    <select name="jabatan" id="jabatan" class="w-full max-w-xs bg-white border-[#00000080] rounded-md focus:outline-none select select-bordered" required>
                        <option disabled selected>Silahkan pilih jabatan anda</option>
                        @foreach ($jabatans as $jabatan)
                            <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                        @endforeach
                    </select>

                    <button type="submit"
                        class="bg-[#0F044C] rounded-md text-white mt-3 py-2 hover:scale-105 duration-300">{{ __('Selesai') }}</button>
                </form>
            </div>

            <div class="hidden w-1/2 md:block rounded-r-2xl">
                <img class="w-full h-[435px] rounded-r-2xl" src="/assets/images/background.jpg">
            </div>
        </div>
    </section>
</body>

</html>
