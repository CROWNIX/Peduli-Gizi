<div class="bg-[#69B550] text-center p-4 text-white rounded-xl text-lg">
    <h5 class="capitalize">Budget Kalori</h5>
    <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
        <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
            style="width: {{ $kalori }}">{{ $kalori }}
        </div>
    </div>
    <div class="grid grid-cols-3 gap-2">
        <div class="protein">
            <h5 class="capitalize">protein</h5>
            <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                    style="width: {{ $protein }}">{{ $protein }}
                </div>
            </div>
        </div>
        <div class="karbohidrat">
            <h5 class="capitalize">karbohidrat</h5>
            <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                    style="width: {{ $carbohydrate }}">{{ $carbohydrate }}
                </div>
            </div>
        </div>
        <div class="lemak">
            <h5 class="capitalize">lemak</h5>
            <div class="w-full h-9 bg-gray-200 rounded-xl dark:bg-gray-700">
                <div class="h-9 bg-[#F58634] rounded-xl dark:bg-blue-500 flex items-center justify-center"
                    style="width: {{ $fat }}">{{ $fat }}
                </div>
            </div>
        </div>
    </div>
</div>
