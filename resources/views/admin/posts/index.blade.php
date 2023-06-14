<x-admin-layout>

    <div class="flex justify-end mb-6 ">
        <a href="{{ route('admin.posts.create') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" >
            Nuevo
        </a>
    </div>

    <ul class="space-y-8 text-gray-800 dark:text-gray-300">
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
                    <hr class="my-1">
                    <span @class([
                        'bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400' => $post->is_published,
                        'bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400' => $post->is_published != 1
                    ]) >{{ $post->is_published == 1 ? 'Publicado' : 'Sin Publicar' }}</span>

                    <p class="my-3">
                        {{ Str::limit($post->summary, 100, '...') }}
                    </p>

                    <a href="{{ route('admin.posts.edit', $post->id) }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    >Editar</a>

                </div>

            </li>
        @endforeach
    </ul>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>

</x-admin-layout>
