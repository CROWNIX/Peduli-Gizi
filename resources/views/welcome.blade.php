<x-customer title="{{ $title }}">

    @if (Auth()->user())
        <section class="md:hidden block mt-12">
            {{-- Navbar Mobile --}}
            <nav class="bg-white fixed bottom-0 left-0 right-0 text-[#727272]">
                <div class="grid grid-cols-5 justify-center p-3">
                    <div class="text-center">
                        <a href="/search"
                            class="material-icons-outlined {{ request()->is('search') ? 'text-white bg-[#F58634]' : 'bg-white' }}  rounded-full p-2"
                            style="font-size:32px">
                            search
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/recipes"
                            class="material-icons-outlined {{ request()->is('recipes') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                            style="font-size:32px">
                            receipt_long
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/beranda"
                            class="material-icons-outlined {{ request()->is('beranda') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                            style="font-size:32px">
                            home
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/food-records"
                            class="material-icons-outlined {{ request()->is('food-records') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                            style="font-size:32px">
                            history
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/profile"
                            class="material-icons-outlined {{ request()->is('profile') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                            style="font-size:32px">
                            person_outline
                        </a>
                    </div>
                </div>
            </nav>
            {{-- End Navbar Mobile --}}
            {{-- Hero --}}
            <div class="text-center">
                <h1 class="text-2xl text-black font-semibold">
                    Halo Rully
                </h1>
                <p class="text-base text-black">
                    Konsumsi makanan bergizi setiap hari
                </p>
            </div>
            {{-- End Hero --}}

            {{-- Food Healty --}}
            <section class="p-4">
                <div class="p-6 relative text-white bg-gradient-to-r from-[#69B550] via-[#69B550] to-white rounded-3xl">
                    <div class="w-2/3">
                        <h3 class="text-xl font-bold">Food Healty</h3>
                        <p class="text-xs font-semibold my-1">Makanan Sehat <br> Berdasarkan Kriteria</p>
                        <p class="text-xs my-1 font-light italic">Usia - Kebutuhan - Pria / Wanita</p>

                        <button class="mt-2 bg-[#F58634] py-2 px-6 rounded-lg font-semibold text-xs">Cek Disini</button>
                    </div>
                    <img class="absolute top-10 right-2" src="{{ asset('images/produk/makanan-1.png') }}">
                </div>
            </section>
            {{-- End Food Healty --}}
            {{-- Food Record --}}
            <section class="p-4 text-white">
                <div
                    class="bg-[#F58634] relative px-8 py-3 flex justify-between items-center rounded-3xl before:block before:absolute before:bg-[#69B550] before:w-2/5 before:h-full before:top-0 before:right-0 before:z-0 overflow-hidden before:rounded-bl-full">
                    <div class="text-base font-semibold">
                        Food Record <br> Mingguan Anda
                    </div>
                    <div class="relative z-10">
                        <button class="text-sm font-semibold text-[#F58634] bg-white py-2 px-3 rounded-xl">Cek
                            Disini</button>
                    </div>
                </div>
            </section>
            {{-- End Food Record --}}

            {{-- Resep Makanan --}}
            <section class="p-4">
                <h3 class="text-xl ml-2">Resep Makanan Sehat</h3>
                <div class="swiper resep-makanan my-2">
                    <div class="swiper-wrapper">
                        @foreach ($recipes as $recipe)
                            <div class="swiper-slide flex justify-center items-center flex-col bg-[#FFF2F0] p-4 rounded-3xl"
                                onclick="window.location.href = '/recipes/{{ $recipe->slug }}'">
                                <img src="{{ asset('images/produk/resep-1.png') }}">
                                <p class="text-base text-[#4D0A00]"> {{ $recipe->title }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- End Resep Makanan --}}
        </section>
    @else
        <section class="md:hidden block bg-gradient-to-b from-[#69B550] via-orange-200 to-[#69B550] overflow-x-hidden">
            <nav class="sticky top-0 z-50 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <div class="text-center pl-8 text-white">
                        <h1 class="text-lg font-bold">Peduli Gizi</h1>
                        <p class="text-xs">Cukupi Gizi Setiap Hari</p>
                    </div>
                    <button data-collapse-toggle="mobile-menu" type="button" id="btn-toggle"
                        class="inline-flex items-center bg-[#F58634] p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-[#F58634] focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-white bg-[#F58634] rounded dark:text-white"
                                    aria-current="page">beranda</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-[#F58634] md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">kebutuhan
                                    gizi</a>
                            </li>
                            <li>
                                <a href="/recipes"
                                    class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-[#F58634] md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">resep
                                    makanan</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-[#F58634] md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="hero relative">
                <div class="absolute top-5 left-5">
                    <h1 class="text-6xl text-[#F58634] font-black outline-blue-700">Peduli <br> Gizi</h1>
                </div>
                <img src="/images/content/hero-mobile.svg" class="relative top-[-60px] right-[-60px]">
                <div class="text-lg px-5 relative top-[-40px]">Aplikasi yang membantu anda mencukupi gizi setiap hari
                </div>
            </div>
            <div class="px-4 text-center">
                <h4 class="font-bold text-lg">Kebutuhan Gizi Berdasarkan Kategori</h4>
                <div class="grid grid-cols-1 px-4 justify-center mt-2">
                    <button class="bg-[#69B550] text-white font-bold text-lg py-1 rounded-full my-2">Usia</button>
                    <button class="bg-[#69B550] text-white font-bold text-lg py-1 rounded-full my-2">Jenis
                        Kelamin</button>
                    <button class="bg-[#69B550] text-white font-bold text-lg py-1 rounded-full my-2">Kebutuhan</button>
                </div>
            </div>
            <div class="px-4">
                <div class="text-center">
                    <h4 class="font-bold text-base">Resep Sehat beserta kadar Gizi bagi tubuh</h4>
                </div>
                <div class="swiper recipe-mobile mt-2">
                    <div class="swiper-wrapper">
                        @foreach ($recipes as $recipe)
                            <div class="swiper-slide">
                                <div class="rounded-xl bg-gradient-to-b p-[3px] from-[#F58634] to-[#69B550] shadow-lg cursor-pointer hover:from-[#69B550] hover:to-[#F58634] duration-200 hover:scale-95"
                                    onclick="window.location.href = '/recipes/{{ $recipe->slug }}'">
                                    <div class="flex flex-col justify-between h-full bg-white rounded-lg p-2">
                                        <img src="{{ asset('images/produk/sego tumpang 1.png') }}" alt="produk"
                                            class="w-full">
                                        <div class="title text-base font-bold text-black my-2">
                                            {{ $recipe->title }}
                                        </div>
                                        <p class="text-xs font-extralight text-black">Gizi per porsi</p>
                                        <div class="grid grid-cols-2 gap-0">
                                            <p class="text-2xs font-normal my-0 text-black">Energi :
                                                {{ $recipe->energy }} kalori
                                            </p>
                                            <p class="text-2xs font-normal my-0 text-black">Protein :
                                                {{ $recipe->protein }} g</p>
                                            <p class="text-2xs font-normal my-0 text-black">Lemak :
                                                {{ $recipe->fat }} g</p>
                                            <p class="text-2xs font-normal my-0 text-black">Karbohidrat :
                                                {{ $recipe->carbohydrate }} g
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination text-[#F58634]"></div>
                </div>
                <div class="grid grid-cols-1 my-2">
                    <button class="text-white rounded-full py-1 bg-[#69B550]">Lainnya</button>
                </div>
                <script>
                    var recipesMoble = new Swiper(".recipe-mobile", {
                        slidesPerView: 2,
                        spaceBetween: 10,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                    });
                </script>
            </div>
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
                <div class="px-3">
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
            </section>
            <footer>
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/logo/logo-with-text.svg') }}" alt="" srcset="">
                    </div>
                    <div class="flex justify-center items-end">
                        &copy 2022 Peduli Gizi. All Rights Reserved
                    </div>
                </div>
            </footer>
        </section>
        <script>
            let navMobile = $('#mobile-menu');
            $('#btn-toggle').on('click', function() {
                navMobile.toggleClass('hidden')
            })
        </script>
    @endif
    {{-- Mobile Version --}}

    {{-- End Mobile Version --}}

    {{-- Desktop Version --}}
    <section class="hidden md:block">
        <nav
            class="invisible md:visible navbar navbar-dekstop absolute w-full py-4 px-32 md:flex md:items-center md:justify-between z-10 duration-100">
            <div class="flex justify-between items-center">
                <img src="{{ asset('images/logo/navbar.svg') }}" class="w-16">
            </div>
            <ul
                class="nav-items md:flex md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-xl hover:text-[#F58634] duration-200 capitalize">beranda</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-xl hover:text-[#F58634] duration-200 capitalize">kebutuhan gizi</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-xl hover:text-[#F58634] duration-200 capitalize">resep makanan</a>
                </li>
                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="text-xl hover:text-[#F58634] duration-200 capitalize">kontak</a>
                </li>
            </ul>
            <a href="/login"
                class="outline outline-[#F58634] text-[#F58634] capitalize bg-white font-[Poppins] font-bold text-xl duration-500 px-8 py-1 mx-4 hover:bg-[#F58634] hover:text-white hover:outline-white rounded cursor-pointer"
                style="border-radius: 16px 32px 0px 16px">
                masuk / daftar
            </a>
        </nav>
        {{-- Bagian Hero Section --}}
        <section class="invisible md:visible hero relative overflow-hidden">
            <div
                class="flex justify-between before:absolute before:bg-blue-500 before:h-full before:w-1/3 before:top-0 before:right-[-120px] before:z-[-1] before:rounded-bl-full before:bg-gradient-to-b before:from-green-600 before:to-orange-200">
                <div class="text w-1/4 ml-32 my-36">
                    <p class="text-lg">Aplikasi yang membantu anda mencukupi gizi setiap hari</p>
                    <h3 class="text-6xl capitalize font-extrabold text-[#F58634] my-4">peduli gizi</h3>
                    <p class="text-lg">Kita mendapat berbagai manfaat dari zat gizi, di antaranya mengatur metabolisme
                        tubuh, memelihara dan
                        mengganti jaringan tubuh, mendukung pertumbuhan, serta berperan dalam mekanisme pertahanan tubuh
                        dan
                        sebagainya.</p>
                    <p class="text-lg my-4">Pastikan gizimu tercukupi setiap hari dengan mudah bersama kami.</p>

                    <a href="/search"
                        class="cursor-pointer bg-green-500 mb-4 py-2 px-6 rounded-xl text-white text-lg capitalize font-extrabold font-[poppins]">
                        explore
                    </a>

                    <div class="swiper mySwiper mt-8">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="border-radius: 120px 30px 0 0">
                                <img src="{{ asset('images/produk/sego tumpang 1.png') }}" alt="produk"
                                    class="w-full">
                            </div>
                            <div class="swiper-slide" style="border-radius: 120px 30px 0 0">
                                <img src="{{ asset('images/produk/sego tumpang 1.png') }}" alt="produk"
                                    class="w-full">
                            </div>
                            <div class="swiper-slide" style="border-radius: 120px 30px 0 0">
                                <img src="{{ asset('images/produk/sego tumpang 1.png') }}" alt="produk"
                                    class="w-full">
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/content/hero.svg" class="relative top-[-60px]">
            </div>
        </section>
        <section class="invisible md:visible description relative top-[-80px] mx-32">
            <div class="">
                <h1 class="text-3xl font-bold text-black">Kebutuhan Gizi Berdasarkan Kategori</h1>
                <div class="flex justify-between items-center">
                    <div class="w-1/3">
                        <div
                            class="bg-green-500 capitalize text-3xl font-bold text-white text-center py-2 px-6 my-4 rounded-xl">
                            usia
                        </div>
                        <div
                            class="bg-green-500 capitalize text-3xl font-bold text-white text-center py-2 px-6 my-4 rounded-xl">
                            jenis kelamin
                        </div>
                        <div
                            class="bg-green-500 capitalize text-3xl font-bold text-white text-center py-2 px-6 my-4 rounded-xl">
                            kebutuhan
                        </div>
                    </div>
                    <div class="pl-4">
                        <p class="text-lg my-4">Kebutuhan GIZI setiap orang pasti berbeda, dan faktor-faktor seperti
                            ukuran
                            tubuh,
                            massa otot, aktivitas fisik, dan penyakit, akan membuat
                            kebutuhan nutrisi kita ikut berubah.
                        </p>
                        <p class="text-lg my-4">Cek kebutuhan gizi berdasarkan kategori disamping, dan pastikan
                            kebutuhan
                            gizi anda
                            dan keluarga anda tercukupi setiap harinya</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Resep Sehat --}}
        <section class="invisible md:visible mx-32 resep-sehat">
            {{-- judul --}}
            <h4 class="text-3xl font-bold text-black">
                Resep Sehat beserta kadar Gizi bagi tubuh
            </h4>
            {{-- deskripsi --}}
            <p class="my-3">Kumpulan resep bergizi yang mudah diterapkan, sebagai masakan rumah beserta kadar gizinya
            </p>
            {{-- produk --}}

            <div class="my-8 grid grid-cols-3 gap-6">
                {{-- daftar produk --}}
                @foreach ($recipes as $recipe)
                    <div class="rounded-xl bg-gradient-to-b p-[6px] from-[#F58634] to-[#69B550] shadow-lg cursor-pointer hover:from-[#69B550] hover:to-[#F58634] duration-200 hover:scale-105"
                        onclick="window.location.href = '/recipes/{{ $recipe->slug }}'">
                        <div class="flex flex-col justify-between h-full bg-white rounded-lg p-4">
                            <img src="{{ asset('images/produk/sego tumpang 1.png') }}" alt="produk"
                                class="w-full">
                            <div class="title text-xl font-bold text-black my-2">
                                {{ $recipe->title }}
                            </div>
                            <p class="text-md font-extralight my-2 text-black">Gizi per porsi</p>
                            <div class="grid grid-cols-2 gap-4">
                                <p class="text-md font-normal my-0 text-black">Energi : {{ $recipe->energy }} kalori
                                </p>
                                <p class="text-md font-normal my-0 text-black">Protein : {{ $recipe->protein }} g</p>
                                <p class="text-md font-normal my-0 text-black">Lemak : {{ $recipe->fat }} g</p>
                                <p class="text-md font-normal my-0 text-black">Karbohidrat :
                                    {{ $recipe->carbohydrate }} g
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button
                class="shadow-lg text-4xl font-extrabold text-white bg-green-500 hover:bg-white hover:text-green-500 duration-500 hover:outline hover:outline-4 hover:outline-green-500 capitalize rounded-xl py-2 px-14">
                lainnya
            </button>
        </section>

        {{-- Food Record --}}
        <section class="invisible md:visible mx-32 my-10 resep-sehat">
            {{-- judul --}}
            <h4 class="text-3xl font-bold text-black">
                Food Record
            </h4>
            {{-- deskripsi --}}
            <p class="my-3">Monitoring untuk memastikan kebutuhan gizi terpenuhi dengan catatan makanan mingguan</p>
            <div class="outline outline-[#F58634] outline-1 p-8 rounded-2xl px-12 my-6">
                {{-- header --}}
                <div class="flex justify-between items-center">
                    {{-- profile --}}
                    <div class="flex justify-between items-center">
                        <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" />
                        <span class="text-2xl font-extrabold ml-3">Halo Rully,</span>
                    </div>
                    <div
                        class="cursor-pointer bg-green-500 rounded-xl text-white flex items-center py-2 px-8 hover:bg-white hover:text-green-500 duration-500 hover:outline hover:outline-4 hover:outline-green-500">
                        <span class="material-icons">
                            calendar_today
                        </span>
                        <span class="capitalize text-2xl ml-2">
                            senin
                        </span>
                    </div>
                </div>

                <div class="bg-[#F58634] my-4 rounded-xl p-8 text-white">
                    <h5 class="text-xl">Budget Kalori</h5>
                    <div class="w-full my-4 h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                        <div class="h-9 bg-[#69B550] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                            style="width: 45%">45%
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="protein">
                            <h5 class="text-xl capitalize">protein</h5>
                            <div class="w-full my-4 h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                                <div class="h-9 bg-[#69B550] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                                    style="width: 45%">45%
                                </div>
                            </div>
                        </div>
                        <div class="karbohidrat">
                            <h5 class="text-xl capitalize">karbohidrat</h5>
                            <div class="w-full my-4 h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                                <div class="h-9 bg-[#69B550] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                                    style="width: 45%">45%
                                </div>
                            </div>
                        </div>
                        <div class="lemak">
                            <h5 class="text-xl capitalize">lemak</h5>
                            <div class="w-full my-4 h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                                <div class="h-9 bg-[#69B550] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                                    style="width: 45%">45%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F58634] my-4 rounded-xl p-8 grid grid-cols-3 gap-4">
                    <div class="bg-white text-black p-4 rounded-lg">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">sarapan</h6>
                            <span class="material-icons text-green-500" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="empty flex justify-center items-center py-4">
                            <h4 class="text-2xl text-zinc-500">Makan apa hari ini?</h4>
                        </div>
                    </div>
                    <div class="bg-white text-black p-4 rounded-lg">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">makan siang</h6>
                            <span class="material-icons text-green-500" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="">
                            <ol class="pl-5 mt-2 space-y-1 list-decimal">
                                <li>Soto ayam kediri</li>
                            </ol>
                        </div>
                    </div>
                    <div class="bg-white text-black p-4 rounded-lg">
                        <div class="flex justify-between items-center border-2 border-white pb-2 border-b-black">
                            <h6 class="text-2xl capitalize text-black">makan malam</h6>
                            <span class="material-icons text-green-500" style="font-size: 42px">
                                add_circle_outline
                            </span>
                        </div>
                        <div class="">
                            <ol class="pl-5 mt-2 space-y-1 list-decimal">
                                <li>Soto ayam kediri</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="shadow-lg text-4xl font-extrabold text-white bg-green-500 hover:bg-white hover:text-green-500 duration-500 hover:outline hover:outline-4 hover:outline-green-500 capitalize rounded-xl py-2 px-14">
                masuk
            </button>
        </section>

        <footer class="invisible md:visible bg-gradient-to-l from-orange-50 to-orange-100 p-8">
            <div class="text-center">
                <h3 class="text-6xl capitalize font-extrabold text-[#F58634] my-4">peduli gizi</h3>
                <p class="text-lg">Aplikasi yang membantu anda mencukupi gizi setiap hari</p>
                <div class="flex justify-center">
                    <div class="bg-white px-4 rounded-full mx-2">👀 Insights</div>
                    <div class="bg-white px-4 rounded-full mx-2">👋 Contact</div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/logo/logo-with-text.svg') }}" alt="" srcset="">
                </div>
                <div class="flex justify-center items-end">
                    &copy 2022 Peduli Gizi. All Rights Reserved
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/logo/logo-with-text.svg') }}" alt="" srcset="">
                </div>
            </div>
        </footer>
    </section>
    <script>
        $(window).scroll(function() {
            let navbar = $('.navbar-dekstop');
            navbar.toggleClass('bg-white sticky top-0 rounded-b-lg shadow', $(this).scrollTop() > navbar
                .height());
            if ($(this).scrollTop() > navbar.height()) {
                navbar.removeClass('.absolute')
            } else {
                navbar.addClass('.absolute')
            }
        });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
        });
    </script>
</x-customer>
