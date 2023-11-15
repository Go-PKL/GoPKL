<div class="bg-primary">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden fas fa-bars"></label>
        </div>
        <div class="drawer-side text-white ">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu px-12 w-full min-h-full justify-between">
                <!-- Sidebar content here -->
                <div class="grid gap-12">
                    <a class="flex justify-center items-center pt-10" href="{{ route('VerifSiswa') }}">
                        <div>
                            <i class="fas fa-laugh-wink text-6xl -rotate-12"></i>
                        </div>
                        <div class="sidebar-brand-text text-2xl font-bold mx-2">{{ auth()->user()->name }}</div>
                    </a>
                    <div class="grid gap-4 opacity-60 border-y-2 py-5">
                        <li>
                            <details>
                                <summary>
                                    <i class="fas fa-check text-3xl"></i>
                                    <a>Verifikasi Data</a>
                                </summary>
                                <ul class="p-2">
                                    <li><a href="{{ route('VerifSiswa') }}">Siswa</a></li>
                                    <li><a href="{{ route('VerifGuru') }}">Guru</a></li>
                                    <li><a href="{{ route('VerifPerusahaan') }}">Perusahaan</a></li>
                                </ul>
                            </details>
                        </li>
                        <li>
                            <div><i class="fas fa-school text-3xl"></i><a
                                    href="{{ route('pembimbing') }}">Pembimbing</a></div>
                        </li>
                        <li>
                            <div><i class="fas fa-users text-3xl"></i><a href="{{ route('siswa') }}">Siswa</a></div>
                        </li>
                        <li>
                            <div><i class="fas fa-chalkboard-user text-3xl"></i><a href="{{ route('guru') }}">Guru</a>
                            </div>
                        </li>
                        <li>
                            <div><i class="fas fa-industry text-3xl"></i><a
                                    href="{{ route('perusahaan') }}">Perusahaan</a></div>
                        </li>
                    </div>
                </div>
                <div class="flex justify-center items-center pb-6">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn text-primary rounded-full font-bold">Log out</button>
                    </form>
                </div>

            </ul>
        </div>
    </div>
</div>
