<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <section class="fixed top-0 right-0 left-0 bg-white p-4 text-center">
        <span class="text-xl font-bold">Profile</span>
    </section>
    {{-- foto Profile --}}
    <section class="flex flex-col items-center mt-24">
        <x-fotoProfile></x-fotoProfile>
        <p class="text-2xl my-3 text-center">{{ auth()->user()->name }}</p>
    </section>
    {{-- End foto profile --}}

    {{-- Menu --}}
    <section class="">
        <div class="flex flex-col px-6 mb-20">
            <div class="cursor-pointer grid grid-cols-6 gap-4 justify-center items-center hover:bg-[#FF9385] p-2 rounded-lg"
                onclick="window.location.href = '/families'">
                <div
                    class="col-start-1 col-span-1 bg-[#FFF8EE] text-[#FF9385] flex justify-center items-center rounded-lg py-2">
                    <span class="material-icons-outlined" style="font-size:32px">
                        people
                    </span>
                </div>
                <div class="col-start-2 col-span-4">
                    Anggota Keluarga
                </div>
                <div class="col-start-6 col-span-1 flex justify-center items-center">
                    <span class="material-icons-outlined">
                        chevron_right
                    </span>
                </div>
            </div>
            <div class="cursor-pointer grid grid-cols-6 gap-4 justify-center items-center hover:bg-[#FF9385] p-2 rounded-lg"
                onclick="window.location.href = '/users/{{ auth()->user()->username }}/edit'">
                <div
                    class="col-start-1 col-span-1 bg-[#FFF8EE] text-[#FF9385] flex justify-center items-center rounded-lg py-2">
                    <span class="material-icons-outlined" style="font-size:32px">
                        person_outline
                    </span>
                </div>
                <div class="col-start-2 col-span-4">
                    Edit Profile
                </div>
                <div class="col-start-6 col-span-1 flex justify-center items-center">
                    <span class="material-icons-outlined">
                        chevron_right
                    </span>
                </div>
            </div>
            <div class="cursor-pointer grid grid-cols-6 gap-4 justify-center items-center hover:bg-[#FF9385] p-2 rounded-lg "
                onclick="window.location.href = '/food-records'">
                <div
                    class="col-start-1 col-span-1 bg-[#FFF8EE] text-[#FF9385] flex justify-center items-center rounded-lg py-2">
                    <span class="material-icons-outlined">
                        star
                    </span>
                </div>
                <div class="col-start-2 col-span-4">
                    Food Record
                </div>
                <div class="col-start-6 col-span-1 flex justify-center items-center">
                    <span class="material-icons-outlined">
                        chevron_right
                    </span>
                </div>
            </div>
            <form action="/logout" method="POST" onclick="this.submit()">
                @csrf
                <div
                    class="cursor-pointer grid grid-cols-6 gap-4 justify-center items-center hover:bg-[#FF9385] p-2 rounded-lg ">
                    <div
                        class="col-start-1 col-span-1 bg-[#FFF8EE] text-[#FF9385] flex justify-center items-center rounded-lg py-2">
                        <span class="material-icons-outlined">
                            logout
                        </span>
                    </div>
                    <div class="col-start-2 col-span-4 capitalize">
                        keluar
                    </div>
                    <div class="col-start-6 col-span-1 flex justify-center items-center">
                        <span class="material-icons-outlined">
                            chevron_right
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- End Menu --}}
</x-customer>
