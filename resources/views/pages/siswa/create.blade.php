<title>Data Siswa</title>
@extends('layouts.template')
@section('content')
    <section class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col items-center max-w-3xl bg-white shadow-2xl md:flex md:flex-row rounded-2xl">
            <div class="flex flex-col p-4 md:hidden">
                <img class="h-56 w-52 rounded-2xl" src="/assets/images/background.jpg">
            </div>
            <div class="px-8 py-2 md:w-1/2 md:px-16">
                <h2 class="font-bold text-2xl text-[#000000] text-center">Hello </h2>
                {{-- {{ Auth::user()->name }} --}}
                <p class="text-sm text-[#00000080] text-center">Silahkan masukkan data berikut</p>

                <form method="POST" action="{{ route('siswa.store') }}" class="flex flex-col gap-1 mt-4 text-[#000000]">
                    @csrf

                    <x-input-label class="pt-2" for="nama" :value="__('Nama Lengkap')" />
                    <input id="nama" class="p-2 border border-[#00000080] rounded-md focus:outline-none" type="text"
                        name="nama" required autofocus autocomplete="nama" placeholder="Nama lengkap">

                    <x-input-label class="pt-2" for="kelas" :value="__('Kelas')" />
                    <input id="kelas" class="p-2 border border-[#00000080] rounded-md focus:outline-none" type="text"
                        name="kelas" required autocomplete="kelas" placeholder="12">

                    <x-input-label class="pt-2" for="jurusan" :value="__('Jurusan')" />
                    <select name="jurusan" id="jurusan"
                        class="w-full max-w-xs bg-white border-[#00000080] rounded-md focus:outline-none select select-bordered"
                        required>
                        <option disabled selected>Silahkan pilih jurusan anda</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
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
@endsection
