<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Perusahaan</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>

</head>

<body class="bg-gray-100">
    <section class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col items-center max-w-3xl bg-white shadow-2xl md:flex md:flex-row rounded-2xl">
            {{-- <div class="flex flex-col p-4 md:hidden">
                <img class="h-56 w-52 rounded-2xl" src="/assets/images/background.jpg">
            </div> --}}
            <div class="flex flex-col items-center justify-center py-4 w-52 md:hidden">
                <div class="h-48 border-t w-52 border-x border-slate-800">

                </div>
                <input type="file" class="w-full bg-white rounded-none file-input file-input-xs" />
            </div>
            <div class="px-4 py-5 md:px-8">


                <form method="POST" action="{{ route('perusahaan.store') }}"
                    class="grid grid-cols-2 justify-center items-center gap-1 m-4 text-[#000000]" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="px-4">
                        <h2 class="font-bold text-2xl text-[#000000] text-center">Hello </h2>
                        {{-- {{ Auth::user()->name }} --}}
                        <p class="text-sm text-[#00000080] text-center">Silahkan masukkan data berikut</p>

                        <x-input-label class="pt-2" for="nama" :value="__('Nama Perusahaan')" />
                        <input id="nama" class="p-2 w-5/6 border border-[#00000080] rounded-md focus:outline-none"
                            type="text" name="nama" required autofocus autocomplete="nama"
                            placeholder="PT. ARG Solusi Teknologi">

                        <x-input-label class="pt-2" for="jurusan" :value="__('Jurusan yang dibutuhkan')" />
                        <select name="jurusan" id="jurusan"
                            class="w-5/6 bg-white border-[#00000080] rounded-md select select-bordered focus:outline-none"
                            required>
                            <option disabled selected>Pilih jurusan yang dibutuhkan</option>
                            @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
                            @endforeach
                        </select>

                        <x-input-label class="pt-2" for="alamat" :value="__('Alamat')" />
                        <textarea class="w-5/6 textarea textarea-bordered border-[#00000080] rounded-md focus:outline-none bg-white"
                            name="alamat" id="alamat" placeholder="Jl. Kel, Kec, Kota, Provinsi"></textarea>
                    </div>

                    <div class="items-center justify-center hidden px-8 py-5 md:flex md:flex-col">
                        <div class="w-full h-52 border-x border-t rounded-t-[15px] border-[#00000080]">
                            <img class="w-full h-full img-preview rounded-t-[15px]">
                        </div>
                        <input type="file" id="image" name="image" onchange="previewImage()"
                            class="file-input file-input-sm text-sm rounded-b-[15px] rounded-t-none w-full bg-white" />
                    </div>

                    <button type="submit"
                        class="w-3/4 bg-[#0F044C] rounded-md text-white mt-2 py-2 mx-4 hover:scale-105 duration-300">{{ __('Selesai') }}</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
