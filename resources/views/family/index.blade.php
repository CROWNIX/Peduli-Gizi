<x-customer title="{{ $title }}">
    @component('components.navbar')
    @endcomponent

    <x-topbarMobile title="{{ $title }}">
        <div></div>
    </x-topbarMobile>
    {{-- Anggota Keluarga --}}
    <section class="p-4 mt-16">
        <div class="list-family">
            @if ($families->count())
                @foreach ($families as $family)
                    <div class="flex justify-between items-center border-b-2 border-black pb-2"
                        onclick="window.location.href = '/families/{{ $family->name }}'">
                        <div
                            class="bg-gray-400 overflow-hidden text-white w-16 h-16 rounded-full flex justify-center items-center text-3xl">
                            <img src="{{ asset("storage/" . $family->image) }}" class="h-full object-cover">
                        </div>
                        <div class="text-dark text-xl font-bold text-center">
                            {{ $family->name }}
                        </div>
                        <div>
                            <button
                                class="{{ $family->userNeed->name == "Normal" ? "bg-[#69B550]" : "bg-[#F58634]" }} py-1 w-20 rounded-full text-white">{{ $family->userNeed->name }}</button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="button-add grid grid-cols-1 justify-center my-3">
            <button class="flex justify-center items-center bg-[#F58634] p-2 rounded-full text-lg font-bold text-white"
                onclick="window.location.href = '{{ url()->current() }}/create'">
                <span class="material-icons mr-1" style="font-size: 28px">
                    add_circle_outline
                </span>
                Tambah anggota keluarga
            </button>
        </div>
    </section>
    {{-- End Anggota Keluarga --}}
</x-customer>
