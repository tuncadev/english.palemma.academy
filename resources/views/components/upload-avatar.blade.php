<section class="pl-2 pr-8">
        <div class="bg-sky-100 relative w-28 h-28 overflow-hidden rounded-full border border-dotted border-sky-500">
            <!-- Use a default avatar placeholder -->
                <div id="avatar-def" class="{{ Auth::user()->avatar ? 'hidden' : 'flex' }} absolute z-10 text-sky-600 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  flex-col justify-center items-center">
                    <i class="text-2xl fa-solid fa-plus z-10"></i>
                    <span class="text-xs z-10">@lang('general.upload')</span>
                    <input type="file" name="avatar" accept="image/png, image/jpeg, image/jpg, image/x-icon" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" onchange="previewAvatar(event)">
                </div>
                <img id="empty-avatar-preview" class="hidden absolute w-full h-full object-cover opacity-60" src=""/>
                <div onclick="removeAvatarPrev()" id="remove-avatar-prev" title="remove" class="hidden absolute z-10 text-sky-800 hover:text-amber-200 hover:cursor-pointer left-1/2 transform -translate-x-1/2 bottom-0">
                    <i class=" fa-regular fa-trash-can"></i>
                </div>
            @if (Auth::user()->avatar)
                <img id="current-avatar" src="{{ asset('storage/' . Auth::user()->avatar) }}" class=" w-full h-full object-cover" alt="Avatar">
                <div
                onclick="removeAvatar()"
                id="remove-avatar" title="remove"
                class="bg-sky-500/60 p-1 rounded-full hover:bg-white/100 absolute z-10 text-sky-100 hover:text-gray-600 hover:cursor-pointer left-1/2 transform -translate-x-1/2 bottom-0">
                    <i class=" fa-regular fa-trash-can"></i>
                </div>
            @else
                <img id="avatar-preview" class="absolute w-full h-full object-cover opacity-60" src="{{ asset('images/avatar.jpg') }}" alt="Avatar Preview" />
            @endif
        </div>
        <input type="hidden" id="avatar-delete" name="avatar-delete" value="0">
</section>

<script>
    function previewAvatar(event) {
        const input = event.target;
        const Apreview = document.getElementById('avatar-preview');
        const preview = document.getElementById('empty-avatar-preview');
        const defInput = document.getElementById('avatar-def');
        preview.classList.remove('hidden');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                defInput.classList.add('hidden');
                document.getElementById('remove-avatar-prev').classList.remove('hidden');
                Apreview.classList.add('hidden');

            }
            reader.readAsDataURL(input.files[0]);

        }
    }
    function removeAvatarPrev(){
        const previewAvatar = document.getElementById('empty-avatar-preview');
        const fileInput = document.querySelector('input[name="avatar"]');
        if (fileInput) {
            fileInput.value = ''; // Empty the file input
        }
        document.getElementById('avatar-def').classList.remove('hidden');
        document.getElementById('avatar-def').classList.add('flex');
        document.getElementById('remove-avatar-prev').classList.add('hidden');

        previewAvatar.src = 'images/avatar.jpg';
    }

    function removeAvatar() {
        // Hide the current avatar image
        document.getElementById('current-avatar').classList.add('hidden');

        // Show the default add image div
        document.getElementById('avatar-def').classList.remove('hidden');
        document.getElementById('avatar-def').classList.add('flex');

        // Optional: Hide the remove button if necessary
        document.getElementById('remove-avatar').classList.add('hidden');

        const previewAvatar = document.getElementById('empty-avatar-preview');
        previewAvatar.classList.remove('hidden');
        previewAvatar.src = 'images/avatar.jpg';
        // Optional: You can also set a hidden input field to indicate that the avatar should be deleted on save
        document.getElementById('avatar-delete').value = '1';
}

</script>
