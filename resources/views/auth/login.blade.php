<title>Masuk</title>
@extends('layouts.template')
@section('content')
    <section class="bg-lightblue min-h-screen flex items-center justify-center">
        <div class="bg-white flex flex-col md:flex md:flex-row rounded-2xl shadow-2xl max-w-3xl items-center">
            <div class="md:w-1/2 px-8 md:px-16 py-2">
                <h2 class="font-bold text-2xl text-black text-center">Selamat Datang !</h2>
                <p class="text-sm text-[#00000080] text-center">Selamat Datang | Masukkan data anda</p>

                <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-1 mt-4">
                    @csrf

                    <x-input-label class="pt-2" for="email" :value="__('Email')" />
                    <input class="p-2 border border-[#00000080] rounded-md focus:outline-none" id="email" type="email"
                        name="email" required autofocus placeholder="contoh@gmail.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <x-input-label class="pt-2" for="password" :value="__('Password')" />
                    <input class="p-2 border border-[#00000080] rounded-md focus:outline-none w-full" id="password"
                        type="password" name="password" required placeholder="********">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <div>
                        <div class="mt-4 mb-1 h-full flex items-center">
                            <div id="angkaPertama"
                                class="w-[100px] border border-gray-200 rounded-md grid place-items-center py-1.5">
                            </div>
                            <div id="jenisAritmatika" class="w-[100px] grid place-items-center py-1.5">
                            </div>
                            <div id="angkaKedua"
                                class="w-[100px] border border-gray-200 rounded-md grid place-items-center py-1.5">
                            </div>
                            <div class="w-[100px] grid place-items-center font-semibold py-1.5">
                                =
                            </div>
                            <div>
                                <input id="finalHasil" type="number"
                                    class="block w-[80px] h-full text-center py-1.5 border border-gray-200 rounded-md"
                                    placeholder="">
                            </div>
                        </div>

                    </div>

                    <button type="submit" id="tombolSubmit"
                        class="bg-[#0F044C] rounded-md text-white mt-3 py-2 hover:scale-105 duration-300">Masuk</button>
                </form>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="mt-3 text-xs flex justify-between items-center">
                    <p class="text-[#00000080]">kamu belum memilki akun ?</p>
                    @if (Route::has('register'))
                        <a class="py-2 px-5 bg-white text-[#000000] border rounded-md shadow-md hover:scale-110 duration-300"
                            href="{{ route('register') }}">Daftar
                        </a>
                    @endif
                </div>
            </div>

            <div class="md:block hidden w-1/2 rounded-r-2xl">
                <img class="w-full h-[450px] rounded-r-2xl object-fill" src="/assets/images/background.jpg">
            </div>
        </div>
    </section>
    <script>
        // for debugging 
        function jalanKanScript() {

            const angkaPertama = document.getElementById('angkaPertama');
            const jenisAritmatika = document.getElementById('jenisAritmatika');
            const angkaKedua = document.getElementById('angkaKedua');
            const finalHasil = document.getElementById('finalHasil');
            const tombolSubmit = document.getElementById('tombolSubmit');

            // medendapatkan random angka pertama

            function getRandomData(param) {
                return Math.floor(Math.random() * param);
            }

            function cekKondisiAritmatika(param = false) {
                let isfinalHasilFill = finalHasil.value;
                if (isfinalHasilFill && param) {
                    //ada isi
                    tombolSubmit.classList.remove('bg-gray-500', 'cursor-no-drop');
                    tombolSubmit.classList.add(
                        'active:bg-purple-600', 'hover:bg-[#0F044C]', 'focus:outline-none',
                        'focus:shadow-outline-purple'
                    );
                    tombolSubmit.type = 'submit';

                } else {
                    tombolSubmit.classList.add('bg-gray-500', 'cursor-no-drop');
                    tombolSubmit.classList.remove(
                        'active:bg-purple-600', 'hover:bg-[#0F044C]', 'focus:outline-none',
                        'focus:shadow-outline-purple'
                    );
                    tombolSubmit.type = 'button';
                }
            }
            cekKondisiAritmatika();



            let isfinalHasilFill = finalHasil.textContent;
            if (isfinalHasilFill) {
                tombolSubmit.classList
            }


            let countFirst = getRandomData(90);
            // medendapatkan random angka kedua
            let countSecond = getRandomData(10);
            // medendapatkan random operator aritmatika
            // const aritmatikaOperator = ['+', '-', 'X', '/'];
            const aritmatikaOperator = ['+', '-'];
            const RandomAritmatikaOperator = Math.floor(Math.random() * aritmatikaOperator.length);


            // operasi aritmatika dan penyimoanan hasil akhir
            let hasilAkhirTrue;
            hasilAkhirTrue = aritmatikaOperator[RandomAritmatikaOperator] == '+' ? countFirst + countSecond :
                aritmatikaOperator[RandomAritmatikaOperator] == '-' ? countFirst - countSecond : '';
            // aritmatikaOperator[RandomAritmatikaOperator] == '/' ? countFirst / countSecond : '';
            console.info(hasilAkhirTrue);

            // memasukan ke tampilan
            angkaPertama.textContent = countFirst;
            jenisAritmatika.textContent = aritmatikaOperator[RandomAritmatikaOperator];
            angkaKedua.textContent = countSecond;

            // mendapatkan hasil user

            finalHasil.addEventListener('change', (e) => jalan(e));
            finalHasil.addEventListener('keyup', (e) => jalan(e));


            function jalan(e) {
                console.info('jalan')
                if (e.target.value == hasilAkhirTrue) {

                    cekKondisiAritmatika(true)
                } else {
                    cekKondisiAritmatika(false)
                }

            }

        }
        jalanKanScript();
    </script>
@endsection
