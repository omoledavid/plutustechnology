<x-app-layout>
    <x-banner pageName="{{ $pageTitle }}" />
    <div class="blog-section style-2 pt-120 pb-120">
        <div class="container">
            <div class="row g-md-4 gy-5 align-items-center justify-content-center">
                @forelse ($posts as $post)
                    <x-post-card :$post />
                @empty
                    <div class="col-lg-4 col-md-6 wow animate fadeInLeft" data-wow-delay="200ms"
                        data-wow-duration="2000ms">
                        <div class="blog-card">
                            <h3>No Post Available</h3>
                        </div>
                    </div>
                @endforelse
            </div>
            @if ($posts && $posts->count() > 0)
                <x-pagination :paginator="$posts" />
            @endif
        </div>
    </div>
    @include('sections.cta')
</x-app-layout>
