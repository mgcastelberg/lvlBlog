<x-admin-layout>

    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">
    @endpush

    <style type="text/css">
    .ck.ck-editor__main>.ck-editor__editable {
        background: rgb(17 24 39 / var(--tw-bg-opacity));
        /* background: #b7bdcb; */
    }
    .ck.ck-editor__main > .ck-editor__editable:not(.ck-focused) {
        border-color: hsl(300, 1%, 22%);
    }
    </style>

    {{-- <style type="text/css">

        .ck-editor {
            color: rgb(209 213 219 / var(--tw-text-opacity));

            /* Overrides the border radius setting in the theme. */
            --ck-border-radius: 7px;

            /* Overrides the default font size in the theme. */
            --ck-font-size-base: 14px;

            /* Helper variables to avoid duplication in the colors. */
            /* --ck-custom-background: hsla(231, 22%, 20%, 1); */
            /* --ck-custom-background: hsla(231, 22%, 16%, 1); */
            /* --ck-custom-background: hsla(231, 18%, 12%, 1); */
            --ck-custom-background: rgb(31 41 55 / var(--tw-bg-opacity));
            /* rgb(17 24 39 / var(--tw-bg-opacity)); */
            --ck-custom-foreground: hsl(255, 3%, 18%);
            --ck-custom-border: hsl(300, 1%, 22%);
            --ck-custom-white: hsl(0, 0%, 100%);

            /* -- Overrides generic colors. ------------------------------------------------------------- */

            --ck-color-base-foreground: var(--ck-custom-background);
            --ck-color-focus-border: hsl(208, 90%, 62%);
            --ck-color-text: hsl(0, 0%, 98%);
            --ck-color-shadow-drop: hsla(0, 0%, 0%, 0.2);
            --ck-color-shadow-inner: hsla(0, 0%, 0%, 0.1);

            /* -- Overrides the default .ck-button class colors. ---------------------------------------- */

            --ck-color-button-default-background: var(--ck-custom-background);
            --ck-color-button-default-hover-background: hsl(270, 1%, 22%);
            --ck-color-button-default-active-background: hsl(270, 2%, 20%);
            --ck-color-button-default-active-shadow: hsl(270, 2%, 23%);
            --ck-color-button-default-disabled-background: var(--ck-custom-background);

            --ck-color-button-on-background: var(--ck-custom-foreground);
            --ck-color-button-on-hover-background: hsl(255, 4%, 16%);
            --ck-color-button-on-active-background: hsl(255, 4%, 14%);
            --ck-color-button-on-active-shadow: hsl(240, 3%, 19%);
            --ck-color-button-on-disabled-background: var(--ck-custom-foreground);

            --ck-color-button-action-background: hsl(168, 76%, 42%);
            --ck-color-button-action-hover-background: hsl(168, 76%, 38%);
            --ck-color-button-action-active-background: hsl(168, 76%, 36%);
            --ck-color-button-action-active-shadow: hsl(168, 75%, 34%);
            --ck-color-button-action-disabled-background: hsl(168, 76%, 42%);
            --ck-color-button-action-text: var(--ck-custom-white);

            --ck-color-button-save: hsl(120, 100%, 46%);
            --ck-color-button-cancel: hsl(15, 100%, 56%);

            /* -- Overrides the default .ck-dropdown class colors. -------------------------------------- */

            --ck-color-dropdown-panel-background: var(--ck-custom-background);
            --ck-color-dropdown-panel-border: var(--ck-custom-foreground);

            /* -- Overrides the default .ck-splitbutton class colors. ----------------------------------- */

            --ck-color-split-button-hover-background: var(--ck-color-button-default-hover-background);
            --ck-color-split-button-hover-border: var(--ck-custom-foreground);

            /* -- Overrides the default .ck-input class colors. ----------------------------------------- */

            --ck-color-input-background: var(--ck-custom-background);
            --ck-color-input-border: hsl(257, 3%, 43%);
            --ck-color-input-text: hsl(0, 0%, 98%);
            --ck-color-input-disabled-background: hsl(255, 4%, 21%);
            --ck-color-input-disabled-border: hsl(250, 3%, 38%);
            --ck-color-input-disabled-text: hsl(0, 0%, 78%);

            /* -- Overrides the default .ck-labeled-field-view class colors. ---------------------------- */

            --ck-color-labeled-field-label-background: var(--ck-custom-background);

            /* -- Overrides the default .ck-list class colors. ------------------------------------------ */

            --ck-color-list-background: var(--ck-custom-background);
            --ck-color-list-button-hover-background: var(--ck-color-base-foreground);
            --ck-color-list-button-on-background: var(--ck-color-base-active);
            --ck-color-list-button-on-background-focus: var(--ck-color-base-active-focus);
            --ck-color-list-button-on-text: var(--ck-color-base-background);

            /* -- Overrides the default .ck-balloon-panel class colors. --------------------------------- */

            --ck-color-panel-background: var(--ck-custom-background);
            --ck-color-panel-border: var(--ck-custom-border);

            /* -- Overrides the default .ck-toolbar class colors. --------------------------------------- */

            --ck-color-toolbar-background: var(--ck-custom-background);
            --ck-color-toolbar-border: var(--ck-custom-border);

            /* -- Overrides the default .ck-tooltip class colors. --------------------------------------- */

            --ck-color-tooltip-background: hsl(252, 7%, 14%);
            --ck-color-tooltip-text: hsl(0, 0%, 93%);

            /* -- Overrides the default colors used by the ckeditor5-image package. --------------------- */

            --ck-color-image-caption-background: hsl(0, 0%, 97%);
            --ck-color-image-caption-text: hsl(0, 0%, 20%);

            /* -- Overrides the default colors used by the ckeditor5-widget package. -------------------- */

            --ck-color-widget-blurred-border: hsl(0, 0%, 87%);
            --ck-color-widget-hover-border: hsl(43, 100%, 68%);
            --ck-color-widget-editable-focus-background: var(--ck-custom-white);

            /* -- Overrides the default colors used by the ckeditor5-link package. ---------------------- */

            --ck-color-link-default: hsl(190, 100%, 75%);
    }
    </style> --}}

    <h1 class="my-3 text-2xl text-gray-800 dark:text-gray-300">Editar Post</h1>

    <div class="px-4 py-3 bg-white rounded-md shadow-md dark:bg-gray-800">
        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 mb-3 md:gap-3 lg:gap-6 md:grid-cols-4">
                <figure>
                    <img id="imgPreview" class="w-auto h-52" src="{{ $post->image }}" alt="{{ $post->title }}">
                </figure>

                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    <input accept="image/*" aria-describedby="file_input_help" id="file_input" name="image" type="file" onchange="previewImage(event, '#imgPreview')"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>
                {{-- <div>
                    <label for="upload_image" class="flex items-center px-4 py-3 text-gray-800 bg-white rounded-md cursor-pointer">
                        <i class="mr-2 fa-solid fa-camera"></i>
                        Actualizar imagen
                        <input type="file" name="" id="upload_image" class="hidden" accept="image/*">
                    </label>
                </div> --}}
            </div>

            <div class="col-span-6 my-3">
                <x-label>Título</x-label>
                <x-input type="text" id="title" name="title" placeholder="Ingrese un nombre para el post" onkeyup="string_to_slug() "
                    class="w-full mt-1" value="{{ old('title', $post->title ) }}"/>
                <x-input-error for="title" />
            </div>

            <div class="col-span-6 my-3">
                <x-label>Slug</x-label>
                <x-input type="text" id="slug" name="slug" placeholder="Ingrese un nombre para el post"
                    class="w-full mt-1" value="{{ old('slug', $post->slug) }}" />
                <x-input-error for="slug" />
            </div>

            <div class="col-span-6 my-3">
                <x-label>Tema</x-label>
                <select id="topic_id" name="topic_id" placeholder="Ingrese un nombre para el post" class="w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600">
                    @foreach ( $topics as $topic )
                        <option value="{{ $topic->id }}" @selected(old('topic_id', $post->topic_id) == $topic->id)>{{ $topic->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="topic_id" />
            </div>

            <div class="col-span-6 my-3">
                <x-label>Resumen</x-label>
                <textarea type="text" id="summary" name="summary" placeholder="Ingrese un nombre para el post" rows="3"
                    class="w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                >{{ old('summary', $post->summary) }}</textarea>
                <x-input-error for="summary" />
            </div>

            {{-- Simple --}}
            <div class="col-span-6 my-3">
                <x-label>Etiquetas</x-label>
                    <select class="w-full mt-1 border-gray-300 rounded-md shadow-sm js-example-basic-multiple dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                        name="tags[]" multiple="multiple">
                        @foreach ( $tags as $tag )
                            <option value="{{ $tag->id }}" @selected($post->tags->contains($tag))>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                <x-input-error for="tags" />
            </div>

            {{-- From Ajax --}}
            {{-- <div class="col-span-6 my-3">
                <x-label>Etiquetas</x-label>
                    <select class="w-full mt-1 border-gray-300 rounded-md shadow-sm select2 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                    name="tags[]" multiple="multiple">
                    </select>
                <x-input-error for="tags" />
            </div> --}}

            <div class="col-span-6 my-3">
                <textarea id="editor" name="content" class="ck-editor__editable">{{ old('content', $post->content) }}</textarea>
                <x-input-error for="content" />
            </div>

            <div class="col-span-6 my-3">
                <input type="hidden" value="0" name="is_published">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="1" @checked(old('is_published', $post->is_published) == 1) name="is_published" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Publicado</span>
                </label>
                {{ date('Y-m-d H:i:s') }}
            </div>


            <div class="flex items-center justify-end px-4 py-3 text-right shadow bg-gray-50 dark:bg-gray-800">
                <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('zDETelnxTLTJNIcJv1eQ').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="mr-3 text-sm text-gray-600 dark:text-gray-400">
                    Saved.
                </div>

                <x-danger-button class="mr-3" type="button" onclick="deletePost()">
                    Eliminar
                </x-danger-button>

                <button type="submit" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800" wire:loading.attr="disabled" wire:target="photo">
                    Actualizar
                </button>
            </div>

        </form>
        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" id="formDeletePost">
            @csrf
            @method('DELETE')
        </form>

    </div>

    @push('js')
        {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script> --}}
        <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>

        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script> --}}


        {{-- <script src=" https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-block-quote@38.0.1/src/index.min.js "></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/36.0.1/ckeditor.min.js" integrity="sha512-m1b22NPZjHOJ4PEMtKYmqK7s9UOKOQ2o7e+tTMfPLqGDN1jXUeE0JHSOVkuF3UIWDk/tLvbhv/Qjgb3c8G1k6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}



        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

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


            ClassicEditor
        .create(document.querySelector('#editor'), {

            licenseKey: '',

            toolbar: {
                shouldNotGroupWhenFull: true
            },

            codeBlock: {
                languages: [
                    { language: "plaintext", label: "Plain text" },
                    { language: "html", label: "HTML" },
                    { language: "css", label: "CSS" },
                    { language: "javascript", label: "JavaScript" },
                    { language: "cs", label: "C#" },
                    { language: "sql", label: "SQL" },
                    { language: "json", label: "JSON" },
                    { language: "c", label: "C" },
                    { language: "cpp", label: "C++" },
                    { language: "diff", label: "Diff" },
                    { language: "java", label: "Java" },
                    { language: "php", label: "PHP" },
                    { language: "python", label: "Python" },
                    { language: "ruby", label: "Ruby" },
                    { language: "typescript", label: "TypeScript" },
                    { language: "xml", label: "XML" }
                ],
                indentSequence: "    "
            }

        });

            // ClassicEditor
            // .create( document.querySelector( '#editor' ))
            // .catch( error => {
            //     console.error( error );
            // } );


            // ClassicEditor
            //     .create( document.querySelector( '#editor' ), {
            //         plugins: [ 'CodeBlock' ],
            //         toolbar: [ 'CodeBlock' ]
            //     })
            //     .catch( error => {
            //         console.error( error );
            //     } );


            // ClassicEditor
            //     .create( document.querySelector( '#editor' ), {
            //         licenseKey: '',
            //         toolbar: {
            //             shouldNotGroupWhenFull: true
            //         },
            //     })
            //     .catch( error => {
            //         console.error( error );
            //     });

            $(document).ready(function() {
                // Simple
                $('.js-example-basic-multiple').select2({
                    tags: true,
                    tokenSeparators:[',', ' ']
                });
            });

            function deletePost(){
                form = document.getElementById('formDeletePost');
                // Send form
                form.submit();

            }

            function previewImage(event, querySelector){

                //Recuperamos el input que desencadeno la acción
                const input = event.target;

                //Recuperamos la etiqueta img donde cargaremos la imagen
                $imgPreview = document.querySelector(querySelector);

                // Verificamos si existe una imagen seleccionada
                if(!input.files.length) return

                //Recuperamos el archivo subido
                file = input.files[0];

                //Creamos la url
                objectURL = URL.createObjectURL(file);

                //Modificamos el atributo src de la etiqueta img
                $imgPreview.src = objectURL;

            }

            hljs.highlightAll();

            // $(document).ready(function() {
            //     $('.select2').select2({
            //         ajax: {
            //             url: "{{ route('api.tags.index') }}",
            //             dataType: 'json',
            //             delay: 250,
            //             data: function(params){
            //                 return {
            //                     term: params.term
            //                 }
            //             },
            //             processResults: function(data) {
            //                 return {
            //                     results: $.map(data, function(tag) {
            //                         return { id: tag.id, text: tag.nombre };
            //                     })
            //                 };
            //             }
            //         }
            //     });
            // });
        </script>
    @endpush


</x-admin-layout>

