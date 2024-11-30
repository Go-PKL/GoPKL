<title>Home</title>
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
                    <div class="flex justify-center pb-16 pt-5">
                        @foreach (Auth::user()->siswa as $siswa)
                            <div class="flex gap-3 text-5xl font-extrabold">
                                <p>Selamat Datang</p>
                                <p class="text-success">{{ $siswa->nama }}</p>
                            </div>
                        @endforeach
                    </div>
                @endrole
                {{-- welcome guru --}}
                @role('guru')
                    <div class="flex justify-center gap-3 pb-16 pt-5">
                        @foreach (Auth::user()->guru as $guru)
                            <div class="flex gap-3 text-5xl font-extrabold">
                                <p>Selamat Datang</p>
                                <p class="text-success">{{ $guru->nama }}</p>
                            </div>
                        @endforeach
                    </div>
                @endrole
                {{-- welcome perusahaan --}}
                @role('perusahaan')
                    <div class="flex justify-center gap-3 pb-16 pt-5">
                        @foreach (Auth::user()->perusahaan as $perusahaan)
                            <div class="flex gap-3 text-5xl font-extrabold">
                                <p>Selamat Datang</p>
                                <p class="text-success">{{ $perusahaan->nama }}</p>
                            </div>
                        @endforeach
                    </div>
                @endrole
                {{-- go pkl --}}
                <div class="flex items-center border-b-2 pb-20 pt-5">
                    <img class="duration-300 hover:scale-105" src="/assets/images/gopkl.png" alt="">
                    <div class="pt-10">
                        <p class="mb-5 text-6xl font-bold">Go PKL</p>
                        <p>Sebuah website yang bertujuan untuk memudahkan sekolah dan perusahaan dalam mengelola Praktek
                            Kerja Lapangan para siswa yang nantinya akan menjadi generasi emas untuk masa yang akan datang
                        </p>
                        @role('siswa')
                            <a class="btn mt-5 rounded-md bg-[#3CBA78] text-white duration-300 hover:scale-105 hover:bg-[#3CBA78] hover:bg-opacity-30 hover:text-success"
                                href="{{ route('siswa.index') }}">Daftar
                                Perusahaan</a>
                        @endrole
                        @role('guru')
                            <a class="btn mt-5 rounded-md bg-[#3CBA78] text-white duration-300 hover:scale-105 hover:bg-[#3CBA78] hover:bg-opacity-30 hover:text-success"
                                href="{{ route('guru.index') }}">Terima
                                Siswa</a>
                        @endrole
                        @role('perusahaan')
                            <a class="btn mt-5 rounded-md bg-[#3CBA78] text-white duration-300 hover:scale-105 hover:bg-[#3CBA78] hover:bg-opacity-30 hover:text-success"
                                href="{{ route('perusahaan.index') }}">Terima
                                Siswa</a>
                        @endrole
                    </div>
                </div>
                {{-- FAQ --}}
                <div class="flex gap-5 pb-5 pt-20">
                    @role('siswa')
                        <div class="max-w-md rounded-md border-2 border-success p-10 text-center duration-300 hover:scale-95">
                            <p class="font-bold capitalize">Bagaimana Cara Mendaftar Ke Perusahaan di Go PKL?</p><br>
                            <p>Kalian bisa mendaftar dengan menekan tombol daftar perusahaan atau
                                langsung ke halaman
                                pendaftaran PKL</p>
                        </div>
                    @endrole
                    @role('guru')
                        <div class="max-w-md rounded-md border-2 border-success p-10 text-center duration-300 hover:scale-95">
                            <p class="font-bold capitalize">Bagaimana Cara Mendaftar Ke Perusahaan di Go PKL?</p><br>
                            <p>Kalian bisa mendaftar dengan menekan tombol daftar perusahaan atau
                                langsung ke halaman
                                pendaftaran PKL</p>
                        </div>
                    @endrole
                    @role('perusahaan')
                        <div class="max-w-md rounded-md border-2 border-success p-10 text-center duration-300 hover:scale-95">
                            <p class="font-bold capitalize">Bagaimana Cara Mendaftar Ke Perusahaan di Go PKL?</p><br>
                            <p>Kalian bisa mendaftar dengan menekan tombol daftar perusahaan atau
                                langsung ke halaman
                                pendaftaran PKL</p>
                        </div>
                    @endrole
                    <div class="max-w-md rounded-md border-2 border-success p-10 text-center duration-300 hover:scale-95">
                        <p class="font-bold capitalize">Apa yang harus dilakukan jika terdapat kesalahan dalam memasukkan
                            data?</p><br>
                        <p>Pengguna bisa melaporkan kepada admin. Setelah itu admin akan memproses ulang data tersebut, tapi
                            usahakan tidak salah dalam penginputan data. Karena akan memperpanjang atau memperlama proses
                        </p>
                    </div>
                    <div class="max-w-md rounded-md border-2 border-success p-10 text-center duration-300 hover:scale-95">
                        <p class="font-bold capitalize">Berapa lama proses verifikasi akun dari admin?</p><br>
                        <p>Untuk verifikasi akun sendiri akan di proses sekitar 2-5 menit untuk jam kerja. Apabila tidak
                            dijam kerja, maka itu akan terjadi lebih lama</p>
                    </div>
                </div>
                {{-- Jumlah Data --}}
                <div
                    class="grid grid-cols-3 justify-items-center gap-5 py-20 text-sm text-gray-900 dark:text-gray-100 md:gap-10 md:text-base">
                    <div
                        class="flex h-[75px] w-[150px] items-center justify-center rounded-[20px] bg-[#3CBA78] text-white shadow-2xl duration-300 hover:scale-105 md:h-[200px] md:w-[300px]">
                        <div class="flex flex-col items-center gap-7">
                            <div class="flex gap-5">
                                <i class="fa-solid fa-users text-4xl"></i>
                                <p class="text-4xl">{{ $jumlahSiswa }}</p>
                            </div>
                            <p>Jumlah Siswa</p>
                        </div>
                    </div>
                    <div
                        class="flex h-[75px] w-[150px] items-center justify-center rounded-[20px] bg-[#3CBA78] text-white shadow-2xl duration-300 hover:scale-105 md:h-[200px] md:w-[300px]">
                        <div class="flex flex-col items-center gap-7">
                            <div class="flex gap-5">
                                <i class="fas fa-chalkboard text-4xl"></i>
                                <p class="text-4xl">{{ $jumlahGuru }}</p>
                            </div>
                            <p>Jumlah Guru</p>
                        </div>
                    </div>
                    <div
                        class="flex h-[75px] w-[150px] items-center justify-center rounded-[20px] bg-[#3CBA78] text-white shadow-2xl duration-300 hover:scale-105 md:h-[200px] md:w-[300px]">
                        <div class="flex flex-col items-center gap-7">
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
        <div class="mx-auto max-w-7xl py-5 sm:px-6 lg:px-8">
            <p class="text-center text-2xl font-bold capitalize text-white">about us</p>
            <div class="flex justify-around text-white">
                <div class="flex flex-col items-center">
                    <p class="font-bold">Husnul Fikri Averus</p>
                    <p>Full Stack Developer</p>
                    <div class="mt-2 flex gap-3">
                        <a href="https://www.facebook.com/husnulfkrialferues" target="_blank" rel="noopener noreferrer">
                            <i
                                class="fa-brands fa-facebook rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                        </a>
                        <a href="https://www.instagram.com/fikri_averus/" target="_blank" rel="noopener noreferrer">
                            <i
                                class="fa-brands fa-instagram rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                        </a>
                        <a href="https://github.com/chqrety" target="_blank" rel="noopener noreferrer">
                            <i
                                class="fa-brands fa-github rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                        </a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=fikriaverus23@gmail.com" target="_blank">
                            <i
                                class="fa-solid fa-envelope rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <p class="font-bold">Muhammad Luthfi</p>
                    <p>Full Stack Developer</p>
                    <div class="mt-2 flex gap-3">
                        <i
                            class="fa-brands fa-facebook rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                        <i
                            class="fa-brands fa-instagram rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                        <i
                            class="fa-brands fa-github rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                        <i
                            class="fa-solid fa-envelope rounded-md bg-white p-1 text-success duration-300 hover:scale-150"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
