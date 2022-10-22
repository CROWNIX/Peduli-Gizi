{{-- Navbar Mobile --}}
<nav class="bg-white fixed bottom-0 left-0 right-0 text-[#727272] z-50">
    <div class="grid grid-cols-5 justify-center p-3">
        <div class="text-center">
            <a href="/search"
                class="material-icons-outlined {{ request()->is('search*') ? 'text-white bg-[#F58634]' : 'bg-white' }}  rounded-full p-2"
                style="font-size:32px">
                search
            </a>
        </div>
        <div class="text-center">
            <a href="/recipes"
                class="material-icons-outlined {{ request()->is('recipes*') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
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
                class="material-icons-outlined {{ request()->is('food-records*') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                style="font-size:32px">
                history
            </a>
        </div>
        <div class="text-center">
            <a href="/users"
                class="material-icons-outlined {{ request()->is('users*') ? 'text-white bg-[#F58634]' : 'bg-white' }} rounded-full p-2"
                style="font-size:32px">
                person_outline
            </a>
        </div>
    </div>
</nav>
{{-- End Navbar Mobile --}}
