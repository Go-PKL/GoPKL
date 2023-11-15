<title>Dashboard</title>
@extends('layouts.user.main')
@section('content')
    @php
        $jumlahSiswa = DB::table('siswas')->count();
        $jumlahGuru = DB::table('gurus')->count();
        $jumlahPerusahaan = DB::table('perusahaans')->count();
    @endphp

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white dark:bg-gray-800 sm:rounded-lg">
                {{-- welcome siswa --}}
                @role('siswa')
                    <div class="flex justify-center pt-5 pb-16">
                        @foreach (Auth::user()->siswa as $siswa)
                            <div class="flex text-5xl font-extrabold gap-3">
                                <p>Selamat Datang</p>
                                <p class="text-success">{{ $siswa->nama }}</p>
                            </div>
                        @endforeach
                    </div>
                @endrole
                {{-- welcome guru --}}
                @role('guru')
                    <div class="flex justify-center pt-5 pb-16 gap-3">
                        @foreach (Auth::user()->guru as $guru)
                            <div class="flex text-5xl font-extrabold gap-3">
                                <p>Selamat Datang</p>
                                <p class="text-success">{{ $guru->nama }}</p>
                            </div>
                        @endforeach
                    </div>
                @endrole
                {{-- welcome perusahaan --}}
                @role('perusahaan')
                    <div class="flex justify-center pt-5 pb-16 gap-3">
                        @foreach (Auth::user()->perusahaan as $perusahaan)
                            <div class="flex text-5xl font-extrabold gap-3">
                                <p>Selamat Datang</p>
                                <p class="text-success">{{ $perusahaan->nama }}</p>
                            </div>
                        @endforeach
                    </div>
                @endrole
                {{-- go pkl --}}
                <div class="flex items-center pt-5 pb-20 border-b-2">
                    <img src="/assets/images/gopkl.png" alt="" class="hover:scale-105 duration-300">
                    <div class="pt-10">
                        <p class="text-6xl font-bold mb-5">Go PKL</p>
                        <p>Sebuah website yang bertujuan untuk memudahkan sekolah dan perusahaan dalam mengelola Praktek
                            Kerja Lapangan para siswa yang nantinya akan menjadi generasi emas untuk masa yang akan datang
                        </p>
                        @role('siswa')
                            <a href="{{ route('siswa.index') }}"
                                class="btn bg-[#3CBA78] hover:bg-[#3CBA78] hover:bg-opacity-30 rounded-md hover:scale-105 duration-300 mt-5 text-white hover:text-success">Daftar
                                Perusahaan</a>
                        @endrole
                        @role('guru')
                            <a href="{{ route('guru.index') }}"
                                class="btn bg-[#3CBA78] hover:bg-[#3CBA78] hover:bg-opacity-30 rounded-md hover:scale-105 duration-300 mt-5 text-white hover:text-success">Terima
                                Siswa</a>
                        @endrole
                        @role('perusahaan')
                            <a href="{{ route('perusahaan.index') }}"
                                class="btn bg-[#3CBA78] hover:bg-[#3CBA78] hover:bg-opacity-30 rounded-md hover:scale-105 duration-300 mt-5 text-white hover:text-success">Terima
                                Siswa</a>
                        @endrole
                    </div>
                </div>
                {{-- FAQ --}}
                <div class="flex pt-20 pb-5 gap-5">
                    @role('siswa')
                        <div class="border-2 border-success rounded-md p-10 max-w-md text-center hover:scale-95 duration-300">
                            <p class="font-bold capitalize">Bagaimana Cara Mendaftar Ke Perusahaan di Go PKL?</p><br>
                            <p>Kalian bisa mendaftar dengan menekan tombol daftar perusahaan atau
                                langsung ke halaman
                                pendaftaran PKL</p>
                        </div>
                    @endrole
                    @role('guru')
                        <div class="border-2 border-success rounded-md p-10 max-w-md text-center hover:scale-95 duration-300">
                            <p class="font-bold capitalize">Bagaimana Cara Mendaftar Ke Perusahaan di Go PKL?</p><br>
                            <p>Kalian bisa mendaftar dengan menekan tombol daftar perusahaan atau
                                langsung ke halaman
                                pendaftaran PKL</p>
                        </div>
                    @endrole
                    @role('perusahaan')
                        <div class="border-2 border-success rounded-md p-10 max-w-md text-center hover:scale-95 duration-300">
                            <p class="font-bold capitalize">Bagaimana Cara Mendaftar Ke Perusahaan di Go PKL?</p><br>
                            <p>Kalian bisa mendaftar dengan menekan tombol daftar perusahaan atau
                                langsung ke halaman
                                pendaftaran PKL</p>
                        </div>
                    @endrole
                    <div class="border-2 border-success rounded-md p-10 max-w-md text-center hover:scale-95 duration-300">
                        <p class="font-bold capitalize">Apa yang harus dilakukan jika terdapat kesalahan dalam memasukkan
                            data?</p><br>
                        <p>Pengguna bisa melaporkan kepada admin. Setelah itu admin akan memproses ulang data tersebut, tapi
                            usahakan tidak salah dalam penginputan data. Karena akan memperpanjang atau memperlama proses
                        </p>
                    </div>
                    <div class="border-2 border-success rounded-md p-10 max-w-md text-center hover:scale-95 duration-300">
                        <p class="font-bold capitalize">Berapa lama proses verifikasi akun dari admin?</p><br>
                        <p>Untuk verifikasi akun sendiri akan di proses sekitar 2-5 menit untuk jam kerja. Apabila tidak
                            dijam kerja, maka itu akan terjadi lebih lama</p>
                    </div>
                </div>
                {{-- Jumlah Data --}}
                <div
                    class="grid grid-cols-3 gap-5 py-20 text-sm text-gray-900 justify-items-center md:gap-10 md:text-base dark:text-gray-100">
                    <div
                        class="flex items-center justify-center bg-[#3CBA78] w-[150px] h-[75px] md:w-[300px] md:h-[200px] rounded-[20px] text-white hover:scale-105 duration-300 shadow-2xl">
                        <div class="flex flex-col gap-7 items-center">
                            <div class="flex gap-5">
                                <i class="fa-solid fa-users text-4xl"></i>
                                <p class="text-4xl">{{ $jumlahSiswa }}</p>
                            </div>
                            <p>Jumlah Siswa</p>
                        </div>
                    </div>
                    <div
                        class="flex justify-center items-center bg-[#3CBA78] w-[150px] h-[75px] md:w-[300px] md:h-[200px] rounded-[20px] text-white hover:scale-105 duration-300 shadow-2xl">
                        <div class="flex flex-col gap-7 items-center">
                            <div class="flex gap-5">
                                <i class="fas fa-chalkboard text-4xl"></i>
                                <p class="text-4xl">{{ $jumlahGuru }}</p>
                            </div>
                            <p>Jumlah Guru</p>
                        </div>
                    </div>
                    <div
                        class="flex justify-center items-center bg-[#3CBA78] w-[150px] h-[75px] md:w-[300px] md:h-[200px] rounded-[20px] text-white hover:scale-105 duration-300 shadow-2xl">
                        <div class="flex flex-col gap-7 items-center">
                            <div class="flex gap-5">
                                <i class="fas fa-industry text-4xl"></i>
                                <p class="text-4xl">{{ $jumlahPerusahaan }}</p>
                            </div>
                            <p>Jumlah Perusahaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-success">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 py-5">
            <p class="capitalize text-white text-2xl font-bold text-center">about us</p>
            <div class="flex justify-around text-white">
                <div class="flex flex-col items-center">
                    <p class="font-bold">Husnul Fikri Averus</p>
                    <p>UI/UX</p>
                    <div class="flex mt-2 gap-3">
                        <i
                            class="bg-white p-1 rounded-md text-success fa-brands fa-facebook hover:scale-150 duration-300"></i>
                        <i
                            class="bg-white p-1 rounded-md text-success fa-brands fa-instagram hover:scale-150 duration-300"></i>
                        <i
                            class="bg-white p-1 rounded-md text-success fa-brands fa-github hover:scale-150 duration-300"></i>
                        <i
                            class="bg-white p-1 rounded-md text-success fa-solid fa-envelope hover:scale-150 duration-300"></i>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <p class="font-bold">Muhammad Luthfi</p>
                    <p>Front End Developer</p>
                    <div class="flex mt-2 gap-3">
                        <i
                            class="bg-white p-1 rounded-md text-success fa-brands fa-facebook hover:scale-150 duration-300"></i>
                        <i
                            class="bg-white p-1 rounded-md text-success fa-brands fa-instagram hover:scale-150 duration-300"></i>
                        <i
                            class="bg-white p-1 rounded-md text-success fa-brands fa-github hover:scale-150 duration-300"></i>
                        <i
                            class="bg-white p-1 rounded-md text-success fa-solid fa-envelope hover:scale-150 duration-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
