<title>Hasil Pendaftaran</title>
@extends('layouts.user.main')
@section('content')
    {{-- @foreach ($siswas as $siswa) --}}
    <div class="py-16 overflow-x-auto px-7">
        <table class="table table-zebra">
            <thead>
                <tr class="text-black border-b border-black">
                    <th></th>
                    <th>Guru Pembimbing</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Durasi PKL</th>
                    <th>Penerimaan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Hidayati, S.Kom, M.Pd.T</td>
                    <td>Muhammad Luthfi</td>
                    <td>12</td>
                    <td>PPLG</td>
                    <td>6 Bulan</td>
                    <td class="flex text-white gap-x-2">
                        <div class="relative z-50 ">
                            <div x-data="{ fullscreenModal: false }" x-init="$watch('fullscreenModal', function(value) {
                                        if (value === true) {
                                            document.body.classList.add('overflow-hidden');
                                        } else {
                                            document.body.classList.remove('overflow-hidden');
                                        }
                                        @keydown.escape ="fullscreenModal=false">
                                <button @click="fullscreenModal=true"
                                    class="btn btn-sm font-semibold bg-[#3C79F5] hover:bg-[#3C79F5] hover:scale-105 duration-300 text-white">Info</button>
                                <template x-teleport="body">
                                    <div x-show="fullscreenModal" x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="translate-y-full"
                                        x-transition:enter-end="translate-y-0"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="translate-y-0"
                                        x-transition:leave-end="translate-y-full"
                                        class="flex fixed z-[99] w-screen  inset-0 h-screen bg-black/40">
                                        <button @click="fullscreenModal=false" class="absolute z-30 top-4 right-10 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="white" class="w-10 h-10">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        <div class="relative flex flex-wrap items-center w-full h-full ">
                                            <div class="bg-white w-screen h-[90%] absolute left-0 right-0 bottom-0">
                                                <form action="" method=""
                                                    class="grid items-center w-full h-full grid-cols-2 gap-x-[90px] gap-y-6 py-5 top-30">
                                                    <h1 class="col-span-2 mx-10 text-5xl font-bold capitalize justify-self-center">
                                                        Data Siswa PKL
                                                    </h1>
                                                    <div class="flex flex-col justify-self-end">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" name="email" readonly
                                                            class="p-2 border w-[469px]  border-[#787A91] rounded-md focus:outline-none">
                                                    </div>
                                                    <div class="flex flex-col justify-self-start">
                                                        <label for="nama">Nama Siswa</label>
                                                        <input type="text" id="nama" name="nama"
                                                            value="" readonly
                                                            class="p-2 border w-[469px] border-[#787A91] rounded-md focus:outline-none">

                                                    </div>
                                                    <div class="flex flex-col justify-self-end">
                                                        <label for="jurusan">Jurusan</label>
                                                        <input type="text" id="jurusan" name="jurusan" readonly
                                                            class="p-2 border w-[469px]  border-[#787A91] rounded-md focus:outline-none">
                                                    </div>
                                                    <div class="flex flex-col justify-self-start">
                                                        <label for="kelas">Kelas</label>
                                                        <input type="text" id="kelas" name="kelas" readonly
                                                            class="p-2 border w-[469px]  border-[#787A91] rounded-md focus:outline-none">
                                                    </div>
                                                    <div class="flex flex-col justify-self-end">
                                                        <label for="tgl_mulai">Tanggal Mulai</label>
                                                        <input type="date" id="tgl_mulai" name="tgl_mulai" readonly
                                                            class="p-2 border w-[469px] border-[#787A91] rounded-md focus:outline-none">
                                                    </div>
                                                    <div class="flex flex-col justify-self-start">
                                                        <label for="tgl_selesai">Tanggal Selesai</label>
                                                        <input type="date" id="tgl_selesai" name="tgl_selesai" readonly
                                                            class="p-2 border w-[469px] border-[#787A91] rounded-md focus:outline-none">
                                                    </div>
                                                    <div class="flex flex-col justify-self-end">
                                                        <label for="durasi_pkl">Durasi PKL</label>
                                                        <input type="text" id="durasi_pkl" name="durasi_pkl" readonly
                                                            class="p-2 border w-[469px] border-[#787A91] rounded-md focus:outline-none">
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                        <a href="#" class="btn btn-sm text-white hover:bg-[#DC3545] bg-[#DC3545]">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Hidayati, S.Kom, M.Pd.T</td>
                    <td>Husnul Fikri Averus</td>
                    <td>12</td>
                    <td>PPLG</td>
                    <td>6 Bulan</td>
                    <td class="flex text-white gap-x-2">
                        <a href="#" class="btn btn-sm text-white hover:bg-[#3C79F5] bg-[#3C79F5]">Info</a>
                        <a href="#" class="btn btn-sm text-white hover:bg-[#DC3545] bg-[#DC3545]">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <th>3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>4</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>5</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>6</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- @endforeach --}}
@endsection
