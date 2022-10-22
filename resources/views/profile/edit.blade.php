<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <x-topbarMobile title="{{ $title }}">
        <div></div>
    </x-topbarMobile>
    {{-- Form Edit --}}
    <form action="/users/{{ $user->username }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        {{-- foto Profile --}}
        <section class="flex flex-col items-center mt-24 mb-4">
            <x-fotoProfile
                image="{{ str_contains($user->image, 'https://') ? $user->image : asset('storage/' . $user->image) }}">
            </x-fotoProfile>
            <input type="file" id="foto" name="image" hidden accept="image/jpg, image/png, image/jpeg">
            <script>
                $('#foto').on('change', function() {
                    const image = $('#foto');
                    const imgPreview = $('[alt="foto-profile"]');
                    const ofReader = new FileReader();
                    ofReader.readAsDataURL(image[0].files[0]);
                    ofReader.onload = function(ofREvent) {
                        imgPreview.attr('src', ofREvent.target.result)
                    }
                })
            </script>
        </section>

        {{-- End foto profile --}}
        <div class="px-4 mb-20">
            <x-input value="{{ old('name', $user->name) }}" label="Nama Lengkap" name="name" />
            <x-select name="gender" label="Jenis Kelamin">
                <option value="">Pilih jenis kelamin</option>
                <option value="laki-laki" {{ old('gander', $user->gender) == 'laki-laki' ? 'selected' : '' }}>Laki -
                    Laki
                </option>
                <option value="perempuan" {{ old('gander', $user->gender) == 'perempuan' ? 'selected' : '' }}>Perempuan
                </option>
            </x-select>
            <x-select name="user_need_id" label="Fokus Kebutuhan">
                <option value="" selected>Pilih fokus kebutuhan</option>
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
                <button type="submit"
                    class="bg-[#F58634] py-2 text-white font-bold text-lg rounded-full">Simpan</button>
            </div>
        </div>
    </form>
    {{-- End From Edit --}}
</x-customer>
