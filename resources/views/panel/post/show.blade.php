<x-panel-layout>

    @push('css')
        <link rel="stylesheet" href="{{ asset('plugins/highlight/styles/github-dark.min.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('plugins/highlight/styles/ir-black.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('plugins/highlight/styles/vs2015.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('plugins/highlight/styles/dark.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('plugins/highlight/styles/a11y-dark.min.css') }}"> --}}
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    @endpush

    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <section class="pt-10 ">

            <div class="grid grid-cols-1 mb-3 md:gap-3 lg:gap-6 md:grid-cols-4">
                <figure>
                    <img id="imgPreview" class="w-auto h-52" src="{{ $post->image }}" alt="{{ $post->title }}">
                </figure>

                <div class="col-span-3">
                    <div class="text-2xl ">
                        {{ $post->title }}
                    </div>

                    <p class="my-2 text-xs ">
                        Publicado: {{ $post->published_at->format('d-m-Y') }} , Última Actualización: {{ $post->updated_at->diffForHumans() }}
                    </p>

                    <div class="my-2">
                        @foreach ($post->tags as $tag)
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-800 dark:text-blue-200">{{ $tag->name }}</span>
                        @endforeach
                    </div>

                    <div class="my-2">
                        Tema: {{ $post->topic->name }}
                    </div>

                    <div class="my-2">
                        {!! $post->summary !!}
                    </div>
                </div>
            </div>

            <div class="col-span-6 my-3">
                {!! $post->content!!}
            </div>



    </section>

    @push('js')
        <script src="{{ asset('plugins/highlight/highlight.min.js') }}"></script>
        <script src="{{ asset('plugins/highlight/highlightjs-badge.min.js') }}"></script>
        <script>

            hljs.highlightAll();

            window.onload = new function () {
                // set a timer to delay the execution
                setTimeout(function () {
                    window.highlightJsBadge();
                }, 100);
            }

        </script>
    @endpush

</x-panel-layout>
