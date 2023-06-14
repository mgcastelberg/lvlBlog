<x-admin-layout>

    <h1 class="my-3 text-2xl text-gray-800 dark:text-gray-300">Nuevo Post</h1>

    <div class="px-4 py-3 bg-white rounded-md shadow-md dark:bg-gray-800">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="col-span-6 my-3">
                <x-label>Título</x-label>
                <x-input type="text" id="title" name="title" placeholder="Ingrese un nombre para el post" onkeyup="string_to_slug() "
                    class="w-full mt-1" value="{{ old('title') }}"/>
                <x-input-error for="title" />
            </div>

            <div class="col-span-6 my-3">
                <x-label>Slug</x-label>
                <x-input type="text" id="slug" name="slug" placeholder="Ingrese un nombre para el post"
                    class="w-full mt-1" value="{{ old('slug') }}" />
                <x-input-error for="slug" />
            </div>

            <div class="col-span-6 my-3">
                <x-label>Tema</x-label>
                <select id="topic_id" name="topic_id" placeholder="Ingrese un nombre para el post" class="w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                    @foreach ( $topics as $topic )
                        <option value="{{ $topic->id }}" @selected(old('topic_id') == $topic->id)>{{ $topic->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="topic_id" />
            </div>

            <div class="flex items-center justify-end px-4 py-3 text-right shadow bg-gray-50 dark:bg-gray-800">
                <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('zDETelnxTLTJNIcJv1eQ').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="mr-3 text-sm text-gray-600 dark:text-gray-400">
                    Saved.
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800" wire:loading.attr="disabled" wire:target="photo">
                    Crear
                </button>
            </div>

        </form>
    </div>

    <script>
        function string_to_slug() {

            title = document.getElementById("title").value;
            title = title.replace(/^\s+|\s+$/g, '');
            title = title.toLowerCase();
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to = "aaaaeeeeiiiioooouuuunc------";
            for (var i = 0, l = from.length; i < l; i++) {
                title = title.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }
            title = title.replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

            document.getElementById('slug').value = title;

            }
    </script>

</x-admin-layout>
