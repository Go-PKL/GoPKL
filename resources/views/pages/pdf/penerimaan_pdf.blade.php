@php
    $counter = 0;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Penerimaan</title>
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
            font-size: 14px;
        }

        #obat {
            border-collapse: collapse;
            width: 100%;
        }

        #obat td,
        #obat th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #obat tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #obat tr:hover {
            background-color: #ddd;
        }

        #obat th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #00afee;
            color: white;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center; padding-bottom: 20px; font-size: 16px;">Laporan Data Penerimaan Siswa PKL</h2>

    <table id="obat">
        <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Alamat Perusahaan</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Guru Pembimbing</th>
        </tr>

        @foreach ($penerimaans as $penerimaan => $groupedPenerimaans)
            @php
                $counter = $counter + 1;
            @endphp
            @if ($penerimaan)
                <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ $groupedPenerimaans[0]->perusahaan->nama }}</td>
                    <td>{{ $groupedPenerimaans[0]->perusahaan->alamat }}</td>
                    <td>
                        @php $uniqueSiswa = $groupedPenerimaans->pluck('pembimbing.permohonan.siswa.nama')->unique() @endphp
                        @foreach ($uniqueSiswa as $namaSiswa)
                            {{ $namaSiswa }} <br>
                        @endforeach
                    </td>
                    <td>
                        @php $uniqueKelas = $groupedPenerimaans->pluck('pembimbing.permohonan.siswa.kelas')->unique() @endphp
                        {{ $uniqueKelas->implode(', ') }}
                    </td>
                    <td>
                        @php $uniqueJurusan = $groupedPenerimaans->pluck('pembimbing.permohonan.siswa.jurusan.singkatan')->unique() @endphp
                        {{ $uniqueJurusan->implode(', ') }}
                    </td>
                    <td>
                        @php $uniqueGuru = $groupedPenerimaans->pluck('pembimbing.guru.nama')->unique() @endphp
                        {{ $uniqueGuru->implode(', ') }}
                    </td>
                </tr>
            @else
                @php
                    $counter = $counter - 1;
                @endphp
            @endif
        @endforeach

</body>

</html>
