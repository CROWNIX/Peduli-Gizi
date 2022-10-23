<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent
    <section class="p-4">
        <form>
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <span class="material-icons-outlined">
                        search
                    </span>
                </div>
                <input type="search" id="default-search"
                    class="block p-4 pl-12 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Gizi, Artikel, Resep.." required="" name="search">
            </div>
        </form>
    </section>

    {{-- Daftar Resep --}}
    <section class="px-4">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold">Resep Sehat & Bergizi</h2>
            <a href="/recipes" class="material-icons-outlined font-bold">
                east
            </a>
        </div>
        <div class="swiper resep-makanan my-2">
            <div class="swiper-wrapper">
                @foreach ($recipes as $recipe)
                <div
                    class=" swiper-slide rounded-xl bg-gradient-to-b p-[3px] from-[#F58634] to-[#69B550] shadow-lg cursor-pointer hover:from-[#69B550] hover:to-[#F58634] duration-200 hover:scale-95">
                    <div class="flex flex-col justify-between h-full bg-white rounded-lg p-2">
                        <img src="{{ asset('images/produk/' . $recipe->image) }}" alt="produk" class="w-full">
                        <div class="title text-base font-bold text-black my-2">
                            {{ $recipe->title }}
                        </div>
                        <p class="text-xs font-extralight text-black">Gizi per porsi</p>
                        <div class="grid grid-cols-2 gap-0">
                            <p class="text-2xs font-normal my-0 text-black">Energi : {{ $recipe->calory }} kalori
                            </p>
                            <p class="text-2xs font-normal my-0 text-black">Protein : {{ $recipe->protein }} g</p>
                            <p class="text-2xs font-normal my-0 text-black">Lemak : {{ $recipe->fat }} g</p>
                            <p class="text-2xs font-normal my-0 text-black">Karbohidrat :
                                {{ $recipe->carboydrate }} g
                            </p>
                        </div>
                    </div>
                </div>    
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Daftar Resep --}}

    {{-- Informasi Gizi --}}
    <section class="p-4">
        <h2 class="text-xl font-bold">Informasi Gizi</h2>
        <p class="text-lg">Cek kebutuhan gizi berdasarkan</p>
        <div class="flex flex-col text-[#FF8473] text-lg font-medium mt-4">
            <a href="#" class="flex items-center">
                Usia
                <span class="material-icons-outlined">
                    trending_up
                </span>
            </a>
            <a href="#" class="flex items-center">
                Jenis Kelamin
                <span class="material-icons-outlined">
                    trending_up
                </span>
            </a>
            <a href="#" class="flex items-center">
                Ibu Hamil
                <span class="material-icons-outlined">
                    trending_up
                </span>
            </a>
            <a href="#" class="flex items-center">
                Diet
                <span class="material-icons-outlined">
                    trending_up
                </span>
            </a>
            <a href="#" class="flex items-center">
                Balita
                <span class="material-icons-outlined">
                    trending_up
                </span>
            </a>
            <a href="#" class="flex items-center">
                Cek Selengkapnya
            </a>
        </div>
    </section>
    {{-- End Informasi Gizi --}}

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    @endpush
    <script>
        var resep = new Swiper(".resep-makanan", {
            slidesPerView: 2,
            grid: {
                rows: 1,
            },
            spaceBetween: 10,
        });
    </script>
</x-customer>
