<?php /** @var $posts \Illuminate\Pagination\LengthAwarePaginator */ ?>
<x-app-layout>
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col px-3">
        <div class="flex flex-col">
            @foreach($posts as $post)
                <div>
                    <a href="{{route('view', $post)}}">
                        <h2 class="text-blue-500 font-bold text-lg sm:text-xl mb-2">
                            {!! str_replace(request()->get('q'), '<span class="bg-yellow-400">' . request()->get('q') . '</span>', $post->title) !!}
                        </h2>
                    </a>
                    <div>
                        {{$post->shortBody()}}
                    </div>
                </div>
                <hr class="my-4">
            @endforeach
            {{$posts->links()}}
        </div>
    </section>
    <x-sidebar />
</x-app-layout>
