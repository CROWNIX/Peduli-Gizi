<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <x-topbarMobile title="{{ $title }}">
        <div></div>
    </x-topbarMobile>
    {{-- foto Profile --}}
    <form action="/families" class="" method="POST">
        @csrf
        <section class="flex flex-col items-center mt-24">
            <x-fotoProfile></x-fotoProfile>
        </section>
        {{-- End foto profile --}}

        {{-- Form Edit --}}
        <div class="px-4 mb-20">
            <x-input value="{{ old('name') }}" label="Nama Lengkap" name="name" />
            <x-select name="gender" label="Jenis Kelamin">
                <option>Pilih jenis kelamin</option>
                <option value="laki-laki" {{ old('gender') == 'laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
                <option value="perempuan" {{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </x-select>
            <x-select name="user_need_id" label="Fokus Kebutuhan">
                <option selected>Pilih fokus kebutuhan</option>
                @foreach ($userNeeds as $userNeed)
                    <option value="{{ $userNeed->id }}"
                        {{ old('user_need_id') ?? null == $userNeed->id ? 'selected' : '' }}>
                        {{ $userNeed->name }}
                    </option>
                @endforeach
            </x-select>

            <div class="grid grid-cols-3 gap-2">
                <x-input required name="age" value="{{ old('age') }}" type="number" label="Usia" />
                <x-input required name="weight" value="{{ old('weight') }}" type="number" label="Berat Badan" />
                <x-input required name="height" value="{{ old('height') }}" type="number" label="Tinggi Badan" />
            </div>
            <div class="grid grid-cols-1 my-2">
                <button type="submit"
                    class="bg-[#F58634] py-2 text-white font-bold text-lg rounded-full">Simpan</button>
            </div>
        </div>
    </form>
    {{-- End From Edit --}}
</x-customer>
