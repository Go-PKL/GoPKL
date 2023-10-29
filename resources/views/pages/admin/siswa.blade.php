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
            <form action="{{ route('siswa') }}" method="GET">
                <input type="text" placeholder="Masukkan data yang ingin anda cari"
                    class="text-sm input input-bordered w-72" name="search" value="{{ old('cari') }}" />
            </form>
        </div>
        <div class="overflow-x-auto p-7">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr class="text-sm text-black border-b border-black">
                        <th></th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        @php
                            $counter = $counter + 1;
                        @endphp
                        @if ($siswa->user->hasRole('siswa'))
                            <tr>
                                <th>{{ $counter }}</th>
                                <td>{{ $siswa->user->email }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td class="">
                                    <button class="btn btn-primary btn-sm">info</button>
                                    <button class="btn btn-warning btn-sm">edit</button>
                                    <button class="btn btn-error btn-sm">hapus</button>
                                </td>
                            </tr>
                        @else
                            @php
                                $counter = $counter - 1;
                            @endphp
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
