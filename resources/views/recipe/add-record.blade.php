<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <x-topbarMobile title="{{ $title }}">
        <div></div>
    </x-topbarMobile>

    <section class="mt-20 px-6 my-2">
        <button id="btn-dropdown"
            class="relative z-10 bg-[#F58634] rounded-full w-full flex items-center text-white justify-center text-lg font-bold py-2">
            <span class="material-icons cursor-pointer mr-2" style="font-size: 28px">
                add_circle_outline
            </span>
            <span>
                Tambah untuk keluarga
            </span>
        </button>
        <div id="dropdown" class="hidden flex-col bg-gray-200 pt-10 relative top-[-30px] z-0 p-4">
            <div class="time border-b-2 pb-1 border-gray-500 text-xl text-[#828282] hover:bg-white" data-familyid=""
                data-familyname="{{ auth()->user()->name }}">
                {{ auth()->user()->name }}
            </div>
            @foreach ($families as $family)
                <div class="time border-b-2 pb-1 border-gray-500 text-xl text-[#828282] hover:bg-white"
                    data-familyid="{{ $family->id }}" data-familyname="{{ $family->name }}">
                    {{ $family->name }}
                </div>
            @endforeach
        </div>
    </section>

    <section class="px-4">
        <form action="/food-records" method="POST">
            @csrf
            <input hidden type="text" name="family_id" value="{{ old('family_id') }}" class="border">
            <div class="mb-2">
                <label for="first_name" class="blocktext-lg font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap</label>
                <input type="text" id="first_name" name="name"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('name', auth()->user()->name) }}" required readonly>
            </div>
            <div class="mb-2">
                <label for="first_name" class="blocktext-lg font-medium text-gray-900 dark:text-gray-300">Nama
                    Makanan</label>
                <input type="text" id="first_name" name="recipe_slug"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('recipe_slug', str_replace('-', ' ', request('recipe'))) }}" required readonly>
            </div>
            <div class="mb-2">
                <label for="countries" class="block text-lg font-medium text-gray-900 dark:text-gray-400">Hari</label>
                <select id="countries" required name="day"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Pilih hari</option>
                    @foreach (Fungsi::hari() as $hari)
                        <option value="{{ $hari['value'] }}">{{ $hari['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="countries" class="block text-lg font-medium text-gray-900 dark:text-gray-400">Jam
                    Makan</label>
                <select id="countries" required name="time"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Pilih jam makan</option>
                    @foreach (Fungsi::jamMakan() as $jamMakan)
                        <option value="{{ $jamMakan['value'] }}">{{ $jamMakan['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-4">
                <button type="submit" class="bg-[#F58634] rounded-full py-1 w-full text-white text-lg font-bold">
                    Simpan
                </button>
            </div>
        </form>
    </section>
    <script>
        let dropdown = $('#dropdown');
        $(".time").on("click", function(e) {
            console.log(this.dataset.familyid);
            $('[name="family_id"]').val(this.dataset.familyid)
            $('[name="name"]').val(this.dataset.familyname)
        })

        $('#btn-dropdown').on('click', function() {
            dropdown.toggleClass('hidden');
            dropdown.toggleClass('flex');
        })
    </script>
</x-customer>
