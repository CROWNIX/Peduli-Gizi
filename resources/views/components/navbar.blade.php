{{-- Navbar Mobile --}}
<nav class="bg-white fixed bottom-0 left-0 right-0 text-[#727272]">
    <div class="grid grid-cols-5 justify-center p-3">
        <div class="text-center">
            <span
                class="material-icons-outlined {{ request()->is('search') ? 'text-white bg-[#F58634]' : 'bg-white' }}  rounded-full p-2"
                style="font-size:32px">
                search
            </span>
        </div>
        <div class="text-center">
            <span
                class="material-icons-outlined {{ request()->is('recipes') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                style="font-size:32px">
                receipt_long
            </span>
        </div>
        <div class="text-center">
            <span
                class="material-icons-outlined {{ request()->is('beranda') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                style="font-size:32px">
                home
            </span>
        </div>
        <div class="text-center">
            <span
                class="material-icons-outlined {{ request()->is('food-records') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                style="font-size:32px">
                history
            </span>
        </div>
        <div class="text-center">
            <span class="material-icons-outlined {{ request()->is('profile') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2" style="font-size:32px">
                person_outline
            </span>
        </div>
    </div>
</nav>
{{-- End Navbar Mobile --}}
