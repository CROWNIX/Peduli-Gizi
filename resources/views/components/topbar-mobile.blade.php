<section class="fixed top-0 right-0 left-0 z-50 bg-white">
    <div class="flex justify-between p-4 shadow">
        <a href="{{ url()->previous() }}">
            <span class="material-icons-outlined cursor-pointer">
                arrow_back
            </span>
        </a>
        <div class="text-center truncate w-56">
            <h2 class="text-xl font-bold">{{ $title }}</h2>
        </div>
        {{ $slot }}
    </div>
</section>
