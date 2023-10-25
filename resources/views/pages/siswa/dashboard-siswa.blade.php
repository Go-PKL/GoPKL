<title>Dashboard Siswa</title>
@extends('layouts.user.main')
@section('content')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white dark:bg-gray-800 sm:rounded-lg">
                <div class="grid grid-cols-2 gap-5 py-20 text-sm text-gray-900 justify-items-center md:gap-10 md:text-base dark:text-gray-100">
                    <div class="flex justify-center items-center justify-self-end bg-[#33484D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p>Jumlah Siswa</p>
                    </div>
                    <div class="flex justify-center items-center justify-self-start bg-[#3D655D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p>Jumlah Perusahaan</p>
                    </div>
                    <div class="flex justify-center items-center justify-self-end bg-[#3D655D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p>Jumlah Guru</p>
                    </div>
                    <div class="flex justify-center items-center justify-self-start bg-[#33484D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
