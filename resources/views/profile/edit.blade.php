<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <section class="fixed top-0 right-0 left-0 bg-white p-4 text-center">
        <span class="text-xl font-bold">Edit Profile</span>
    </section>
    {{-- foto Profile --}}
    <section class="flex flex-col items-center mt-24">
        <x-fotoProfile></x-fotoProfile>
    </section>
    {{-- End foto profile --}}

    {{-- Form Edit --}}
    <form action="/users/{{ $user->username }}" class="px-4 mb-20" method="POST">
        @method('put')
        @csrf
        <x-input value="{{ old('name', $user->name) }}" label="Nama Lengkap" name="name" />
        <x-select name="jenis-kelamin" label="Jenis Kelamin">
            <option>Pilih jenis kelamin</option>
            <option value="laki-laki" {{ $user->gender == 'laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
            <option value="perempuan" {{ $user->gender == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
        </x-select>
        <x-select name="fokus-kebutuhan" label="Fokus Kebutuhan">
            <option selected>Pilih fokus kebutuhan</option>
            @foreach ($userNeeds as $userNeed)
                <option value="{{ $userNeed->id }}"
                    {{ $user->userNeed->name ?? null == $userNeed->name ? 'selected' : '' }}>
                    {{ $userNeed->name }}
                </option>
            @endforeach
        </x-select>

        <div class="grid grid-cols-3 gap-2">
            <x-input required name="age" value="{{ old('age', $user->age) }}" type="number" label="Usia" />
            <x-input required name="weight" value="{{ old('weight', $user->weight) }}" type="number"
                label="Berat Badan" />
            <x-input required name="height" value="{{ old('height', $user->height) }}" type="number"
                label="Tinggi Badan" />
        </div>
        <div class="grid grid-cols-1 my-2">
            <button type="submit" class="bg-[#F58634] py-2 text-white font-bold text-lg rounded-full">Simpan</button>
        </div>
    </form>
    {{-- End From Edit --}}
</x-customer>
