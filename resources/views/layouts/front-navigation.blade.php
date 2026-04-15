<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>

                    <x-nav-link :href="route('pengaduan.create')" :active="request()->routeIs('pengaduan.create')">
                        {{ __('Buat Pengaduan') }}
                    </x-nav-link>
                    
                    {{-- Tag </x-nav-link> yang tadinya di sini sudah dihapus --}}
                </div>
            </div>
        </div>
    </div>
</nav>