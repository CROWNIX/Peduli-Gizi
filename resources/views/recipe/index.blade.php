<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent
    <section class="p-4 fixed top-0 right-0 left-0 bg-white">
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
                    placeholder="Cari Resep" required name="search">
            </div>
        </form>
    </section>

    {{-- Daftar Resep --}}
    <section class="px-4 mt-24">
        <h2 class="text-xl font-bold">Daftar Resep Sehat & Bergizi</h2>
        <div class="grid grid-cols-2 gap-2 mt-2 overflow-y-scroll overflow-x-hidden py-2" style="height: 65vh;">
            @foreach ($recipes as $recipe)
                <div class="max-h-64 rounded-xl bg-gradient-to-b p-[3px] from-[#F58634] to-[#69B550] shadow-lg cursor-pointer hover:from-[#69B550] hover:to-[#F58634] duration-200 hover:scale-95"
                    onclick="window.location.href = '/recipes/{{ $recipe->slug }}'">
                    <div class="flex flex-col justify-between h-full bg-white rounded-lg p-2">
                        <img src="{{ asset('images/produk/' . $recipe->image) }}" alt="produk"
                            class="w-full h-24 object-cover">
                        <div class="title text-base font-bold text-black my-2">
                            {{ $recipe->title }}
                        </div>
                        <p class="text-xs font-extralight text-black">Gizi per porsi</p>
                        <div class="grid grid-cols-2 gap-0">
                            <p class="text-2xs font-normal my-0 text-black">Energi : {{ $recipe->energy }} kalori
                            </p>
                            <p class="text-2xs font-normal my-0 text-black">Protein : {{ $recipe->protein }} g</p>
                            <p class="text-2xs font-normal my-0 text-black">Lemak : {{ $recipe->fat }} g</p>
                            <p class="text-2xs font-normal my-0 text-black">Karbohidrat :
                                {{ $recipe->carbohydrate }} g
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- End Daftar Resep --}}

</x-customer>
