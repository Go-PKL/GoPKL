@php
    $counter = 0;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pembimbing</title>
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
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

    <h2 style="text-align: center; padding-bottom: 20px;">Laporan Data Pembimbing Siswa PKL</h2>

    <table id="obat">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Guru Pembimbing</th>
        </tr>
        @foreach ($pembimbings as $pembimbing)
            @php
                $counter = $counter + 1;
            @endphp
            @if ($pembimbing->status_penerimaan && $pembimbing->status)
                <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ $pembimbing->permohonan->siswa->nama }}</td>
                    <td>{{ $pembimbing->permohonan->siswa->kelas }}</td>
                    <td>{{ $pembimbing->permohonan->siswa->jurusan->singkatan }}</td>
                    <td>{{ $pembimbing->guru->nama }}</td>
                </tr>
            @else
                @php
                    $counter = $counter - 1;
                @endphp
            @endif
        @endforeach
</body>

</html>
