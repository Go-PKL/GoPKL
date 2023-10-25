<title>Pendaftaran PKL</title>
@extends('layouts.user.main')
@section('content')
    {{-- @foreach ($siswas as $siswa) --}}
    <div class="mx-auto overflow-x-auto w-[1300px] py-16">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Guru Pembimbing</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Durasi PKL</th>
                    <th>Penerimaan</th>
                </tr>
            </thead>
            <tbody class="border-none">
                <tr class="bg-gray-200 border-none">
                    <th>1</th>
                    <td>Hidayati, S.Kom, M.Pd.T</td>
                    <td>Muhammad Luthfi</td>
                    <td>12</td>
                    <td>PPLG</td>
                    <td>6 Bulan</td>
                    <td class="flex text-white gap-x-2">
                        <a href="#" class="btn btn-sm hover:bg-[#198754] bg-[#198754]">Terima</a>
                        <a href="#" class="btn btn-sm hover:bg-[#DC3545] bg-[#DC3545]">Tolak</a>
                    </td>
                </tr>
                <tr class="border-none">
                    <th>2</th>
                    <td>Hidayati, S.Kom, M.Pd.T</td>
                    <td>Husnul Fikri Averus</td>
                    <td>12</td>
                    <td>PPLG</td>
                    <td>6 Bulan</td>
                    <td class="flex text-white gap-x-2">
                        <a href="#" class="btn btn-sm hover:bg-[#198754] bg-[#198754]">Terima</a>
                        <a href="#" class="btn btn-sm hover:bg-[#DC3545] bg-[#DC3545]">Tolak</a>
                    </td>
                </tr>
                <tr class="bg-gray-200 border-none">
                    <th>3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="border-none">
                    <th>4</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-gray-200 border-none">
                    <th>5</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="border-none">
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
