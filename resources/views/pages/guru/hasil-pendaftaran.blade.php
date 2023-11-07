<title>Pendaftaran PKL</title>
@extends('layouts.user.main')
@section('content')
    <div class="py-12 overflow-x-hidden">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-3 text-sm text-gray-900 gap-x-28 gap-y-4 justify-items-center md:text-base dark:text-gray-100">
                @foreach ($perusahaans as $perusahaan)
                    <div
                        class="flex justify-center items-center px-5 gap-x-3 gap-y-5 w-[150px] h-[75px] md:w-[430px] md:h-[205px] rounded-[10px] text-black border border-[#B4B4B3]">
                        <div class="flex justify-center items-center">
                            <img class="w-[124.24px] h-[124.24px] rounded-[10px]"
                                src="{{ asset('storage/' . $perusahaan->image) }}" alt="Logo Perusahaan">
                        </div>
                        <div class="flex flex-col gap-2 justify-center items-start">
                            <h1 class="flex flex-col text-xl font-bold">{{ $perusahaan->nama }}</h1>
                            <p class="flex text-sm">{{ $perusahaan->jurusan }}</p>
                            <div class="relative z-50 ">
                                <div x-data="{ fullscreenModal: false }" x-init="$watch('fullscreenModal', function(value) {
                                            if (value === true) {
                                                document.body.classList.add('overflow-hidden');
                                            } else {
                                                document.body.classList.remove('overflow-hidden');
                                            }
                                            @keydown.escape ="fullscreenModal=false">
                                    <button @click="fullscreenModal=true"
                                        class="btn btn-xs font-semibold bg-[#3C79F5] hover:bg-[#3C79F5] hover:scale-105 duration-300 text-white px-8">Info
                                        PKL</button>
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
                                                <div
                                                    class="bg-white overflow-y-auto w-screen h-[90%] absolute left-0 right-0 bottom-0">
                                                    <form action="" method=""
                                                        class="grid items-center w-full h-full grid-cols-2 gap-y-6 gap-x-14 py-5 top-30">
                                                        <div class="flex justify-center items-center col-span-2 gap-x-20">
                                                            <img class="w-[190px] h-[190px] rounded-[10px]"
                                                                src="{{ asset('storage/' . $perusahaan->image) }}"
                                                                alt="Logo Perusahaan">
                                                            <h1 class=" text-5xl font-bold capitalize">
                                                                {{ $perusahaan->nama }}
                                                            </h1>
                                                        </div>

                                                        {{-- @foreach ($siswas as $siswa) --}}
                                                        <div class="col-span-2 justify-self-center w-[1030px]">
                                                            <table class="table">
                                                                <!-- head -->
                                                                <thead>
                                                                    <tr class="font-bold">
                                                                        <th>Nama</th>
                                                                        <th>Kelas</th>
                                                                        <th>Jurusan</th>
                                                                        <th>Tanggal Mulai</th>
                                                                        <th>Tanggal Selesai</th>
                                                                        <th>Durasi PKL</th>
                                                                        <td>Hapus Siswa</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($pembimbings as $pembimbing)
                                                                        @if ($perusahaan->id == $pembimbing->perusahaan_id)
                                                                            <tr>
                                                                                <td>{{ $pembimbing->permohonan->siswa->nama }}
                                                                                </td>
                                                                                <td>{{ $pembimbing->permohonan->siswa->kelas }}
                                                                                </td>
                                                                                <td>{{ $pembimbing->permohonan->siswa->jurusan->singkatan }}
                                                                                </td>
                                                                                <td>{{ $pembimbing->permohonan->tgl_mulai }}
                                                                                </td>
                                                                                <td>{{ $pembimbing->permohonan->tgl_selesai }}
                                                                                </td>
                                                                                <td>{{ $pembimbing->permohonan->durasi_pkl }}
                                                                                </td>
                                                                                <td>
                                                                                    <form
                                                                                        action="{{ route('hapus-siswa', $pembimbing->id) }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button class="btn btn-error btn-sm"
                                                                                            type="submit"
                                                                                            onclick="return confirm('Yakin?')">Hapus</button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
