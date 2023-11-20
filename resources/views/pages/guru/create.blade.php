<title>Data Guru</title>
@extends('layouts.template')
@section('content')
    <section class="grid w-full h-screen bg-gray-100 place-items-center">
        <div
            class="bg-white rounded-2xl shadow-2xl max-w-[300px] min-w-[250px] md:max-w-[750px] md:min-w-[50%] lg:max-w-[65vw] 2xl:max-w-[45vw] 2xl:min-w-[40vw] h-[430px] xl:h-[500px] 2xl:h-[600px] grid grid-cols-1 md:grid-cols-2 overflow-hidden">
            <div class="flex flex-col items-center justify-center w-full h-full gap-6 px-10 py-4 bg-white">
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-black capitalize">Hello {{ Auth::user()->name }}</h1>
                    <p class="text-black/80 text-[15px]">Silahkan masukkan data berikut</p>
                </div>

                <form action="{{ route('guru.store') }}" method="POST">
                    <div>
                        @csrf
                        <div class="grid items-start w-full min-w-[250px] md:min-w-[280px] lg:min-w-[290px] xl:min-w-[340px] 2xl:min-w-[440px] grid-cols-1 gap-y-3">
                            <div class="grid grid-cols-1">
                                <label class="text-base text-black/80 " for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" required autofocus autocomplete="nama"
                                    placeholder="Nama lengkap" class="w-full py-2 rounded-md focus:outline-none">
                            </div>

                            <div class="grid grid-cols-1">
                                <label class="text-base text-black/80" for="jabatan">Jabatan</label>
                                <select name="jabatan" id="jabatan" style=""
                                    class="w-full py-2 bg-white border-[#00000080] rounded-md focus:outline-none select select-bordered"
                                    required>
                                    <option disabled selected>Silahkan pilih jabatan anda</option>
                                    @foreach ($jabatans as $jabatan)
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="grid grid-cols-1">
                                <button type="submit"
                                    class="bg-[#0F044C] w-full rounded-md text-white py-2 hover:scale-105 transition-all duration-300">Selesai</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hidden w-full h-full bg-white md:block">
                <img src="{{ asset('assets/images/background.jpg') }}" alt="gambar" class="w-full h-full ">
            </div>
        </div>
    </section>
@endsection
