<title>Verifikasi Siswa</title>
@extends('layouts.admin.main')

@php
    $counter = 0;
@endphp

@section('content')
    <div>
        <div class="grid justify-end form-control p-7">
            <label class="label">
                <span class="text-black label-text">Cari Siswa :</span>
            </label>
            <input type="text" placeholder="Masukkan data yang ingin anda cari" class="text-sm input input-bordered w-72" />
        </div>
        <div class="overflow-x-auto p-7">
            <h1>siswa</h1>
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr class="text-sm text-black border-b-2 border-black">
                        <th></th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Durasi PKL</th>
                        <th>Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        @php
                            $counter = $counter + 1;
                        @endphp

                        {{-- jika siswa --}}
                        @if ($item->user->hasRole('siswa'))
                            @php
                                $counter = $counter - 1;
                            @endphp

                            {{-- jika tidak siswa --}}
                        @else
                            <tr>
                                <td>{{ $counter }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->jurusan->singkatan }}</td>
                                <td>6 Bulan</td>
                                <td class="flex gap-4">
                                    <form action="{{ route('verifsiswa') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $item->user->id }}" name="id_user">
                                        <button name="terima" value="terima" class="btn btn-success btn-sm">terima</button>
                                    </form>
                                    <form action="{{ route('hapussiswa') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-error btn-sm type="submit" value="{{ $item->user->id }}"
                                            name="id_user" onclick="return confirm('Yakin?')">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
