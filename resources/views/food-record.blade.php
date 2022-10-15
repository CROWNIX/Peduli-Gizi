<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent
    {{-- Pencapaian Mingguan --}}
    <section class="p-4">
        <h2 class="text-2xl font-bold text-center mb-3">Pencapaian Mingguan</h2>
        <div class="bg-[#69B550] text-center p-4 text-white rounded-xl text-lg">
            <h5 class="capitalize">Budget Kalori</h5>
            <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                    style="width: 45%">45%
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <div class="protein">
                    <h5 class="capitalize">protein</h5>
                    <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                        <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                            style="width: 28.9%">28,9%
                        </div>
                    </div>
                </div>
                <div class="karbohidrat">
                    <h5 class="capitalize">karbohidrat</h5>
                    <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                        <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                            style="width: 45%">45%
                        </div>
                    </div>
                </div>
                <div class="lemak">
                    <h5 class="capitalize">lemak</h5>
                    <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                        <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                            style="width: 45%">45%
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        </script>



    </section>
    {{-- End Pencapaian Mingguan --}}
</x-customer>
