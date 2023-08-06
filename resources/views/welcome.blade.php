<x-app-layout meta-title="Alexsers Blog" meta-description="alexsers personal blog">
    <div class="container mx-auto flex flex-wrap py-6">
        <section class="w-full md:w-2/3 px-3">
            <div class="flex flex-col items-center">
                @foreach($posts as $post)
                    <x-post-item :post="$post" />
                @endforeach
            </div>
            {{ $posts->links() }}
        </section>

        <x-sidebar />

    </div>
</x-app-layout>