@extends('layouts.user.main')

@section('content')
    <div class="flex justify-around mt-5">
        <div class="flex-col border border-gray-400 p-5 rounded-xl">
            <div class="flex items-center mb-5">
                <img src="{{ url('/img/argenesia.png') }}" alt="Image" width="100px" />
                <div class="flex flex-col">
                    <div class="font-bold">PT. ARG Solusi Teknologi</div>
                    <div class="badge badge-outline">6 Bulan</div>
                </div>
            </div>
            <div class="my-5">
                <div class="text-xs font-bold">Hidayati, S. Kom</div>
                <div class="text-xs">Padang Utara, Padang, Sumatera Barat</div>
            </div>
            <div class="grid grid-cols-4 gap-2 my-5">
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">PPLG</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">TJKT</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">ULP</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">BDP</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">AKL</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">BDP</div>
            </div>
            <div class="border border-black rounded-md font-bold my-5">Keterangan: </div>
            <div class="btn bg-[#198754] hover:bg-[#198754] text-white my-5 font-bold w-full">Anda Diterima</div>
        </div>
        <div class="flex-col border border-gray-400 p-5 rounded-xl">
            <div class="flex items-center mb-5">
                <div>
                    <img src="{{ url('/img/argenesia.png') }}" alt="Image" width="100px" />

                </div>
                <div class="flex flex-col">
                    <div class="font-bold">PT. ARG Solusi Teknologi</div>
                    <div class="badge badge-outline">6 Bulan</div>
                </div>
            </div>
            <div class="my-5">
                <div class="text-xs font-bold">Hidayati, S. Kom</div>
                <div class="text-xs">Padang Utara, Padang, Sumatera Barat</div>
            </div>
            <div class="grid grid-cols-4 gap-2 my-5">
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">PPLG</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">TJKT</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">ULP</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">BDP</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">AKL</div>
                <div class="badge badge-secondary text-xs font-bold px-4 rounded-[8px]">BDP</div>
            </div>
            <div class="border border-black rounded-md font-bold my-5">Keterangan: </div>
            <div class="btn bg-[#DC3545] hover:bg-[#DC3545] text-white my-5 font-bold w-full">Anda Ditolak</div>
        </div>
    </div>
@endsection
