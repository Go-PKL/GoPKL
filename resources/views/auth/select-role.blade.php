<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>select role</title>
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

<body>
    <section class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col items-center max-w-3xl bg-white shadow-lg md:bg-slate-200 md:flex md:flex-row rounded-2xl">
            <div class="flex flex-col p-4 md:hidden">
                <img class="h-56 w-52 rounded-2xl" src="/assets/images/background.jpg">
            </div>
            <div class="px-8 py-2 md:w-1/2">
                <h2 class="text-2xl font-bold text-center text-black">Masuk sebagai</h2>
                <p class="text-xs mt-2 text-center text-[#00000080]">Silahkan pilih sesuai kebutuhan masing-masing</p>

                <form method="POST" action="{{ route('register') }}" class="mt-6">
                    @csrf
                    <div class="flex items-center justify-center gap-4 text-white">
                        <a href="{{ route('siswa.create') }}" class="bg-[#0F044C] rounded-md px-4 py-2">Siswa</a>
                        <a href="{{ route('guru.create') }}" class="bg-[#0F044C] rounded-md px-4 py-2">Guru</a>
                        <a href="{{ route('perusahaan.create') }}" class="bg-[#0F044C] rounded-md px-4 py-2">Perusahaan</a>
                    </div>
                </form>
            </div>

            <div class="hidden w-1/2 md:block rounded-r-2xl">
                <img class="w-full h-[435px] rounded-r-2xl" src="/assets/images/background.jpg">
            </div>
        </div>
    </section>
</body>

</html>
