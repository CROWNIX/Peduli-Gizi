<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <x-topbarMobile title="{{ $title }}">
        <div></div>
    </x-topbarMobile>
    {{-- foto Profile --}}
    <section class="flex flex-col items-center mt-24">
        <div
            class="bg-gray-400 overflow-hidden text-white w-48 h-48 rounded-full flex justify-center items-center text-3xl">
            <img src="{{ asset('images/profile/default.png') }}" class="h-full object-cover">
        </div>
    </section>
    {{-- End foto profile --}}

    {{-- Form Edit --}}
    <form action="#" class="px-4 mb-20">
        <div class="mb-2">
            <label for="first_name" class="blocktext-lg font-medium text-gray-900 dark:text-gray-300">Nama
                Lengkap</label>
            <input type="text" id="first_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="John" required>
        </div>
        <div class="mb-2">
            <label for="countries" class="block text-lg font-medium text-gray-900 dark:text-gray-400">Jenis
                Kelamin</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih jenis kelamin</option>
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="countries" class="block text-lg font-medium text-gray-900 dark:text-gray-400">Fokus
                Kebutuhan</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih fokus kebutuhan</option>
                <option value="normal">Normal</option>
                <option value="diet">Diet</option>
                <option value="ibu hamil">Ibu hamil</option>
            </select>
        </div>

        <div class="grid grid-cols-3 gap-2">
            <div class="mb-2">
                <label for="first_name" class="blocktext-lg font-medium text-gray-900 dark:text-gray-300">Usia</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John" required>
            </div>
            <div class="mb-2">
                <label for="first_name" class="blocktext-lg font-medium text-gray-900 dark:text-gray-300">Berat
                    Badan</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John" required>
            </div>
            <div class="mb-2">
                <label for="first_name" class="blocktext-lg font-medium text-gray-900 dark:text-gray-300">Tinggi
                    Badan</label>
                <input type="text" id="first_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="John" required>
            </div>
        </div>
        <div class="grid grid-cols-1 my-2">
            <button class="bg-[#F58634] py-2 text-white font-bold text-lg rounded-full">Simpan</button>
        </div>
    </form>
    {{-- End From Edit --}}
</x-customer>
