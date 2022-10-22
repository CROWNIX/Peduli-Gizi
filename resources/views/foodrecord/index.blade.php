<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent
    {{-- Pencapaian Mingguan --}}
    <section class="p-4">
        <h2 class="text-2xl font-bold text-center mb-3">Pencapaian Mingguan</h2>
        <x-select name="family_id">
            <option value="">Seluruh Keluarga</option>
            @foreach ($families as $family)
                <option value="{{ $family->id }}" onclick="window.location.href = '/food-records/families/{{ $family->name }}'">{{ $family->name }}</option>
            @endforeach
        </x-select>

        <x-foodRecordResult>
            <x-slot name="kalori">
                {{ $kalori }}
            </x-slot>
            <x-slot name="protein">
                {{ $protein }}
            </x-slot>
            <x-slot name="carbohydrate">
                {{ $carbohydrate }}
            </x-slot>
            <x-slot name="fat">
                {{ $fat }}
            </x-slot>
        </x-foodRecordResult>
        {{-- Hari --}}
        <section class="p-4">
            <div class="swiper hari">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-[#69B550] p-4 text-center text-white text-lg font-semibold rounded-xl">
                        Senin
                    </div>
                    <div class="swiper-slide bg-[#69B550] p-4 text-center text-white text-lg font-semibold rounded-xl">
                        Selasa
                    </div>
                </div>
                <div class="swiper-button-next scale-50 " style="color: #fff !important;"></div>
                <div class="swiper-button-prev scale-50 " style="color: #fff !important;"></div>
            </div>
        </section>
        <div class="swiper resep">
            <div class="swiper-wrapper">
                <div class="swiper-slide px-3">
                    <div class="outline outline-[#69B550] bg-white text-black p-4 rounded-lg my-4">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">sarapan</h6>
                            <span class="material-icons text-[#69B550]" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="empty flex justify-center items-center py-4">
                            <h4 class="text-2xl text-zinc-500">Makan apa hari ini?</h4>
                        </div>
                    </div>
                    <div class="outline outline-[#69B550] bg-white text-black p-4 rounded-lg my-4">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">makan siang</h6>
                            <span class="material-icons text-[#69B550]" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="">
                            <ol class="pl-5 mt-2 space-y-1 list-decimal">
                                <li>Soto ayam kediri</li>
                            </ol>
                        </div>
                    </div>
                    <div class="outline outline-[#69B550] bg-white text-black p-4 rounded-lg my-4">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">makan malam</h6>
                            <span class="material-icons text-[#69B550]" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="">
                            <ol class="pl-5 mt-2 space-y-1 list-decimal">
                                <li>Sayur asam pedas</li>
                                <li>Jus apel</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide px-3">
                    <div class="outline outline-[#69B550] bg-white text-black p-4 rounded-lg my-4">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">sarapan</h6>
                            <span class="material-icons text-[#69B550]" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="empty flex justify-center items-center py-4">
                            <h4 class="text-2xl text-zinc-500">Makan apa hari ini?</h4>
                        </div>
                    </div>
                    <div class="outline outline-[#69B550] bg-white text-black p-4 rounded-lg my-4">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">makan siang</h6>
                            <span class="material-icons text-[#69B550]" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="">
                            <ol class="pl-5 mt-2 space-y-1 list-decimal">
                                <li>Soto ayam kediri</li>
                            </ol>
                        </div>
                    </div>
                    <div class="outline outline-[#69B550] bg-white text-black p-4 rounded-lg my-4">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">makan malam</h6>
                            <span class="material-icons text-[#69B550]" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="">
                            <ol class="pl-5 mt-2 space-y-1 list-decimal">
                                <li>Sayur asam pedas</li>
                                <li>Jus apel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next scale-50 " style="color: #fff !important;"></div>
            <div class="swiper-button-prev scale-50 " style="color: #fff !important;"></div>
        </div>
        <script>
            var hari = new Swiper(".hari", {
                loop: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            var resep = new Swiper(".resep", {
                loop: true,
            });

            hari.controller.control = resep;
            resep.controller.control = hari;

            let dropdown = $('#dropdown');
            $(".time").on("click", function(e) {
                $('[name="family_id"]').val(this.dataset.familyid)
                $('[name="name"]').val(this.dataset.familyname)
            })

            $('#btn-dropdown').on('click', function() {
                dropdown.toggleClass('hidden');
                dropdown.toggleClass('flex');
            })
        </script>



    </section>
    {{-- End Pencapaian Mingguan --}}
</x-customer>
