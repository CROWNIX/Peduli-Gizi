<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <x-topbarMobile title="{{ $title }}">
        <form action="/families/{{ $family->name }}" class="d-inline" method="post">
            @method("delete")
            @csrf
            <button type="submit" class="material-icons text-red-500 hover:text-red-500 focus:text-red-500 cursor-pointer"
                style="font-size: 28px" onclick="return confirm('Are you sure ?')">
                delete_forever
            </button>
        </form>
    </x-topbarMobile>
    {{-- foto Profile --}}
    <form action="/families/{{ $family->name }}" class="" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <section class="flex flex-col items-center mt-20">
            <x-fotoProfile image="{{ asset('storage/' . $family->image) }}"></x-fotoProfile>
        </section>
        {{-- End foto profile --}}
        <div class="px-4 mb-4">
            <div class="text-center">
                <h1 class="text-xl font-bold">Kebutuhan Gizi</h1>
                <p class="text-lg">{{ $family->name }}</p>
            </div>
            <x-foodRecordResult>
                <x-slot name="kalori">
                    {{ $kalori }}
                </x-slot>
                <x-slot name="protein">
                    {{ $protein . 'g' }}
                </x-slot>
                <x-slot name="carbohydrate">
                    {{ $carbohydrate . 'g' }}
                </x-slot>
                <x-slot name="fat">
                    {{ $fat . 'g' }}
                </x-slot>
            </x-foodRecordResult>
        </div>
        {{-- Form Edit --}}
        <div class="px-4 mb-20">
            <x-input value="{{ old('name', $family->name) }}" label="Nama Lengkap" name="name" />
            <x-select name="gender" label="Jenis Kelamin">
                <option>Pilih jenis kelamin</option>
                <option value="laki-laki" {{ old('gender', $family->gender) == 'laki-laki' ? 'selected' : '' }}>Laki -
                    Laki</option>
                <option value="perempuan" {{ old('gender', $family->gender) == 'perempuan' ? 'selected' : '' }}>
                    Perempuan</option>
            </x-select>
            <x-select name="user_need_id" label="Fokus Kebutuhan">
                <option selected>Pilih fokus kebutuhan</option>
                @foreach ($userNeeds as $userNeed)
                    <option value="{{ $userNeed->id }}"
                        {{ old('user_need_id', $family->user_need_id) ?? null == $userNeed->id ? 'selected' : '' }}>
                        {{ $userNeed->name }}
                    </option>
                @endforeach
            </x-select>

            <div class="grid grid-cols-3 gap-2">
                <x-input required name="age" value="{{ old('age', $family->age) }}" type="number"
                    label="Usia" />
                <x-input required name="weight" value="{{ old('weight', $family->weight) }}" type="number"
                    label="Berat Badan" />
                <x-input required name="height" value="{{ old('height', $family->height) }}" type="number"
                    label="Tinggi Badan" />
            </div>
            <div class="grid grid-cols-1 my-2">
                <button type="submit"
                    class="bg-[#F58634] py-2 text-white font-bold text-lg rounded-full">Simpan</button>
            </div>
        </div>
    </form>
    {{-- End From Edit --}}
</x-customer>
