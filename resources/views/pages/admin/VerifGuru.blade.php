@extends('layouts.admin.main')

@section('content')
    <div>
        <div class="form-control p-7 grid justify-end">
            <label class="label">
                <span class="label-text text-black">Cari Guru :</span>
            </label>
            <input type="text" placeholder="Masukkan data yang ingin anda cari" class="input input-bordered w-72 text-sm" />
        </div>
        <div class="overflow-x-auto p-7">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr class="border-b-2 border-black text-sm text-black">
                        <th></th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Durasi PKL</th>
                        <th>Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gurus as $guru)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $guru->user->email }}</td>
                            <td>{{ $guru->nama }}</td>
                            <td>{{ $guru->jabatan->nama }}</td>
                            <td>6 Bulan</td>
                            <td class="">
                                <button class="btn btn-success btn-sm">Terima</button>
                                <button class="btn btn-error btn-sm">Tolak</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
