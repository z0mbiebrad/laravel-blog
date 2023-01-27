<x-layout>
    @include('_posts-header')

    <main class="mx-auto mt-6 max-w-6xl space-y-6 lg:mt-20">
        @if($posts->count())

        <x-posts-grid :posts="$posts"></x-posts-drig>

        @else
        <p class="text-center">No posts yet please check back.</p>
        @endif

    </main>
</x-layout>
