<x-layout>
    @include('posts._header')

    <main class="mx-auto mt-6 max-w-6xl space-y-6 lg:mt-20">
        @if($posts->count())

        <x-posts-grid :posts="$posts"></x-posts-grid>

        @else
        <p class="text-center">No posts yet please check back.</p>
        @endif

        {{ $posts->links() }}
    </main>
</x-layout>
