<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent
    {{-- topbar --}}
    <section class="fixed top-0 right-0 left-0 z-50 bg-white">
        <div class="flex justify-between p-4 shadow">
            <span class="material-icons-outlined">
                arrow_back
            </span>
            <h2 class="text-xl font-bold">{{ $recipe->title }}</h2>
            <span class="material-icons-outlined">
                more_vert
            </span>
        </div>
    </section>
    {{-- End top bar --}}

    {{-- Recipe --}}
    <section class="p-4 mt-20 mb-20">
        <div>
            <img src="{{ asset('images/produk/sego tumpang 1.png') }}" alt="produk" class="w-full rounded-xl">
            <div class="text-center text-xl font-bold my-3">{{ $recipe->title }}</div>
            <div class="bg-gray-200 p-4">
                <div class="text-center text-lg font-bold text-[#F58634] mb-2">Gizi per porsi</div>
                <div class="grid grid-cols-2">
                    <p>Energi : {{ $recipe->energy }} kalori </p>
                    <p>Lemak : {{ $recipe->fat }} g</p>
                    <p>Protein : {{ $recipe->protein }} g</p>
                    <p>Karbohidrat : {{ $recipe->carbohydrate }} g</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-10 justify-between py-2">
            <button class="bg-[#F58634] text-white text-lg rounded-xl py-2 text-center" id="btn-ingridients">
                Bahan
            </button>
            <button class="outline outline-[#F58634] bg-white text-[#F58634] text-lg rounded-xl py-2 text-center"
                id="btn-steps">
                Cara Buat
            </button>
        </div>
        <div class="bg-gray-200 p-4 rounded-xl" id="ingridients">
            {!! $recipe->ingridients !!}
        </div>
        <div class="bg-gray-200 p-4 rounded-xl hidden" id="steps">
            {!! $recipe->steps !!}
        </div>
        <script>
            $('#btn-steps').on('click', function() {
                $(this).removeClass('outline')
                $(this).removeClass('outline-[#F58634]')
                $(this).removeClass('bg-white')
                $(this).addClass('bg-[#F58634]')
                $(this).removeClass('text-[#F58634]')
                $(this).addClass('text-white')
                $('#btn-ingridients').addClass('outline')
                $('#btn-ingridients').addClass('outline-[#F58634]')
                $('#btn-ingridients').removeClass('text-white')
                $('#btn-ingridients').addClass('text-[#F58634]')
                $('#btn-ingridients').removeClass('bg-[#F58634]')
                $('#btn-ingridients').addClass('bg-white')
                $('#ingridients').addClass('hidden');
                $('#steps').removeClass('hidden');
            })
            $('#btn-ingridients').on('click', function() {
                $(this).removeClass('outline')
                $(this).removeClass('outline-[#F58634]')
                $(this).removeClass('bg-white')
                $(this).addClass('bg-[#F58634]')
                $(this).removeClass('text-[#F58634]')
                $(this).addClass('text-white')
                $('#btn-steps').addClass('outline')
                $('#btn-steps').addClass('outline-[#F58634]')
                $('#btn-steps').removeClass('text-white')
                $('#btn-steps').addClass('text-[#F58634]')
                $('#btn-steps').removeClass('bg-[#F58634]')
                $('#btn-steps').addClass('bg-white')
                $('#steps').addClass('hidden');
                $('#ingridients').removeClass('hidden');
            })
        </script>
    </section>
    {{-- Emd Recipe --}}
</x-customer>
