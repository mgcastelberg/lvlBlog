<x-panel-layout>

    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard'). "Heyyyy" }}
        </h2>
    </x-slot> --}}

    <ul class="space-y-8 text-gray-800 p-7 dark:text-gray-300">
        @foreach ( $posts as $post )
            {{-- <li class="grid grid-cols-1 gap-3 md:grid-cols-2"> --}}
            <li class="grid grid-cols-1 md:gap-3 lg:gap-6 md:grid-cols-4">
                <figure >
                    <a href="{{ route('admin.posts.edit', $post->id) }}">
                        <img class="aspect-[16/9] object-cover object-center w-full md:w-auto" src="{{ $post->image }}" alt="{{ $post->title }}">
                    </a>
                </figure>

                <div class="col-span-3">
                    <h1 class="font-semibold ">{{ $post->title }}</h1>
                    <hr class="h-0.5 my-2 bg-slate-300 dark:bg-slate-700" />


                    @foreach ($post->tags as $tag)
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-800 dark:text-blue-200">{{ $tag->name }}</span>
                    @endforeach


                    <p class="mt-2 text-sm">
                        Tema: {{ $post->topic->name }}
                    </p>

                    <p class="text-xs">
                        Publicado: {{ $post->published_at->format('d-m-Y') }}
                    </p>

                    <p class="my-3">
                        {{ Str::limit($post->summary, 100, '...') }}
                    </p>

                    <a href="{{ route('panel.post.show', $post->id) }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    >Leer más</a>

                    {{-- <a href="{{ route('admin.posts.edit', $post->id) }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    >Editar</a> --}}

                </div>

            </li>
        @endforeach
    </ul>

    <div class="my-3">
        {{ $posts->links() }}
    </div>


</x-panel-layout>
