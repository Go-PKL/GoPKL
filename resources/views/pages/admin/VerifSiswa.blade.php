@extends('layouts.admin.main')

@section('content')
    <div>
        <div class="form-control w-full p-7 grid justify-items-end">
            <label class="label">
                <span class="label-text text-black">Cari Siswa :</span>
            </label>
            <input type="text" placeholder="Masukkan data yang ingin anda cari"
                class="input input-bordered w-full max-w-xs text-sm" />
        </div>
        <div class="overflow-x-auto p-7">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr class="border-b-2 border-black text-sm text-black">
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
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>fikriaverus23@gmail.com</td>
                        <td>Husnul Fikri Averus</td>
                        <td>12</td>
                        <td>PPLG</td>
                        <td>6 Bulan</td>
                        <td class="">
                            <button class="btn btn-success btn-sm">Terima</button>
                            <button class="btn btn-error btn-sm">Tolak</button>
                        </td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>1</th>
                        <td>fikriaverus23@gmail.com</td>
                        <td>Husnul Fikri Averus</td>
                        <td>12</td>
                        <td>PPLG</td>
                        <td>6 Bulan</td>
                        <td><button class="btn btn-success btn-sm">Terima</button>
                            <button class="btn btn-error btn-sm">Tolak</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
