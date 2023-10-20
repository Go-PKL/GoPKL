@include('layouts.user.main')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <div
                    class="grid grid-cols-2 justify-items-center py-20 gap-5 md:gap-10 text-gray-900 text-sm md:text-base dark:text-gray-100">
                    <div
                        class="flex justify-center items-center justify-self-end bg-[#33484D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p>Jumlah Siswa</p>
                    </div>
                    <div
                        class="flex justify-center items-center justify-self-start bg-[#3D655D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p>Jumlah Perusahaan</p>
                    </div>
                    <div
                        class="flex justify-center items-center justify-self-end bg-[#3D655D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p>Jumlah Guru</p>
                    </div>
                    <div
                        class="flex justify-center items-center justify-self-start bg-[#33484D] w-[150px] h-[75px] md:w-[300px] md:h-[150px] rounded-[20px] text-white">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
