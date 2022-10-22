<div class="relative">
    <div class="bg-gray-400 overflow-hidden text-white w-48 h-48 rounded-full flex justify-center items-center text-3xl">
        <img src="{{ $image == null ? auth()->user()->image : $image }}"" class="h-full object-cover" alt="foto-profile">
    </div>
    <label for="foto" class="bg-orange-500 text-white rounded-full px-2 py-1 absolute bottom-2 right-4">
        <span class="material-icons-outlined">
            border_color
        </span>
    </label>
</div>

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
