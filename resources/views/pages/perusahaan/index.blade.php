<title>Pendaftaran PKL</title>
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
                    <td class="flex gap-x-2">
                        <a href="#" class="btn btn-sm text-white hover:bg-[#198754] bg-[#198754]">Terima</a>
                        <a href="#" class="btn btn-sm text-white hover:bg-[#DC3545] bg-[#DC3545]">Tolak</a>
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
                        <a href="#" class="btn btn-sm text-white hover:bg-[#198754] bg-[#198754]">Terima</a>
                        <a href="#" class="btn btn-sm text-white hover:bg-[#DC3545] bg-[#DC3545]">Tolak</a>
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
