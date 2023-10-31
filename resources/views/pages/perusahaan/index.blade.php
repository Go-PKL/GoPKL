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
                @foreach ($pembimbings as $pembimbing)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $pembimbing->guru->nama }}</td>
                        <td> {{ $pembimbing->permohonan->siswa->nama }}</td>
                        <td> {{ $pembimbing->permohonan->siswa->kelas }}</td>
                        <td> {{ $pembimbing->permohonan->siswa->jurusan->singkatan }}</td>
                        <td> {{ $pembimbing->permohonan->durasi_pkl }}</td>
                        <td class="flex gap-4">
                            <form action="" method="post">
                                @csrf
                                <input type="hidden" value="" name="id_user">
                                <button name="terima" value="terima" class="btn btn-success btn-sm">terima</button>
                            </form>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-error btn-sm type="submit" value="" name="id_user"
                                    onclick="return confirm('Yakin?')">Tolak</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- @endforeach --}}
@endsection
