<x-app-layout>
    <x-banner pageName="{{ $pageTitle }}" />
    <div class="blog-details-page pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-thumb">
                        <img class="rounded-4" src="{{ $post->featurePhoto }}" alt="{{ $post->title }}">
                    </div>
                </div>
            </div>
            <div class="row g-lg-5 gy-5 mb-40 mt-3">
                <div class="col-lg-8">
                    <div class="blog-details-bottom-area">
                        <ul class="blog-meta">
                            <li>
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_709_552)">
                                        <path
                                            d="M6.00065 5.66671C7.47341 5.66671 8.66732 4.4728 8.66732 3.00004C8.66732 1.52728 7.47341 0.333374 6.00065 0.333374C4.52789 0.333374 3.33398 1.52728 3.33398 3.00004C3.33398 4.4728 4.52789 5.66671 6.00065 5.66671Z"
                                            fill="#10C581" />
                                        <path
                                            d="M11.3327 10.6666C11.3327 12.3235 11.3327 13.6666 5.99935 13.6666C0.666016 13.6666 0.666016 12.3235 0.666016 10.6666C0.666016 9.00976 3.05383 7.66663 5.99935 7.66663C8.94488 7.66663 11.3327 9.00976 11.3327 10.6666Z"
                                            fill="#10C581" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_709_552">
                                            <rect width="12" height="14" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                {{ $post->user->name }}
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2309_3082)">
                                        <path
                                            d="M14.3332 2.87213H12.5555V4.30802C12.5555 4.4463 12.5302 4.58323 12.481 4.71099C12.4319 4.83874 12.3599 4.95482 12.2691 5.0526C12.1783 5.15038 12.0705 5.22794 11.9519 5.28086C11.8332 5.33378 11.7061 5.36101 11.5777 5.36101C11.4493 5.36101 11.3221 5.33378 11.2035 5.28086C11.0849 5.22794 10.9771 5.15038 10.8863 5.0526C10.7955 4.95482 10.7235 4.83874 10.6743 4.71099C10.6252 4.58323 10.5999 4.4463 10.5999 4.30802V2.87213H5.42212V4.30802C5.42212 4.58729 5.3191 4.85513 5.13573 5.0526C4.95237 5.25007 4.70366 5.36101 4.44434 5.36101C4.18502 5.36101 3.93632 5.25007 3.75295 5.0526C3.56958 4.85513 3.46656 4.58729 3.46656 4.30802V2.87213H1.68879C1.58302 2.87083 1.47808 2.89239 1.38019 2.93553C1.28229 2.97866 1.19342 3.04251 1.11884 3.12328C1.04425 3.20405 0.985462 3.3001 0.945948 3.40577C0.906434 3.51143 0.886997 3.62456 0.888786 3.73845V14.4502C0.88702 14.5621 0.905739 14.6733 0.943873 14.7774C0.982007 14.8815 1.03881 14.9765 1.11104 15.0569C1.18326 15.1374 1.2695 15.2017 1.36482 15.2463C1.46013 15.2908 1.56267 15.3147 1.66656 15.3166H14.3332C14.4371 15.3147 14.5397 15.2908 14.635 15.2463C14.7303 15.2017 14.8165 15.1374 14.8888 15.0569C14.961 14.9765 15.0178 14.8815 15.0559 14.7774C15.0941 14.6733 15.1128 14.5621 15.111 14.4502V3.73845C15.1128 3.62656 15.0941 3.5154 15.0559 3.41131C15.0178 3.30721 14.961 3.21223 14.8888 3.13178C14.8165 3.05133 14.7303 2.98699 14.635 2.94244C14.5397 2.89789 14.4371 2.874 14.3332 2.87213Z"
                                            fill="#10C581" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2309_3082">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                {{ $post->formattedPublishedDate() }}
                            </li>
                            <li>
                                <a href="#comment-area">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.5 6.5H4.5C4.224 6.5 4 6.2765 4 6C4 5.724 4.224 5.5 4.5 5.5H11.5C11.776 5.5 12 5.724 12 6C12 6.2765 11.776 6.5 11.5 6.5ZM10.5 9.5H5.5C5.224 9.5 5 9.2765 5 9C5 8.7235 5.224 8.5 5.5 8.5H10.5C10.776 8.5 11 8.7235 11 9C11 9.2765 10.776 9.5 10.5 9.5ZM8 0C3.582 0 0 3.1345 0 7C0 9.2095 1.1725 11.177 3 12.4595V16L6.5045 13.8735C6.9895 13.9535 7.4885 14 8 14C12.418 14 16 10.866 16 7C16 3.1345 12.418 0 8 0Z"
                                            fill="#10C581" />
                                    </svg>

                                    {{ $post->comments->count() }} comments
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-details-content mb-40">
                        <h2>{{ $post->title }}</h2>
                        <span class="line-break-2"></span>
                        {!! $post->body !!}
                    </div>
                    <div class="tag-and-social-area">
                        @if ($post->tags->count())
                            <div class="single-widget">
                                <h5 class="widget-title">Tags:</h5>
                                <ul class="tag-list">
                                    @foreach ($post->tags as $tag)
                                        <li>
                                            <a
                                                href="{{ route('filamentblog.tag.post', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="social-area">
                            <h6>Share:</h6>
                            <ul class="social-link">
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                        target="_blank">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 1.53003C4.875 1.53003 1.5 4.89753 1.5 9.04504C1.5 12.795 4.245 15.9075 7.83 16.47V11.22H5.925V9.04504H7.83V7.38753C7.83 5.50503 8.9475 4.47003 10.665 4.47003C11.4825 4.47003 12.3375 4.61253 12.3375 4.61253V6.46503H11.3925C10.4625 6.46503 10.17 7.04253 10.17 7.63504V9.04504H12.255L11.9175 11.22H10.17V16.47C11.9373 16.1909 13.5466 15.2892 14.7074 13.9275C15.8682 12.566 16.5041 10.8342 16.5 9.04504C16.5 4.89753 13.125 1.53003 9 1.53003Z"
                                                fill="#555555" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}"
                                        target="_blank">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.5 0H4.5C2 0 0 2 0 4.5V11.5C0 14 2 16 4.5 16H11.5C14 16 16 14 16 11.5V4.5C16 2 14 0 11.5 0ZM6 12.5C6 12.8 5.8 13 5.5 13H3.5C3.2 13 3 12.8 3 12.5V6.5C3 6.2 3.2 6 3.5 6H5.5C5.8 6 6 6.2 6 6.5V12.5ZM4.5 5.5C3.65 5.5 3 4.85 3 4C3 3.15 3.65 2.5 4.5 2.5C5.35 2.5 6 3.15 6 4C6 4.85 5.35 5.5 4.5 5.5ZM13 12.5C13 12.8 12.8 13 12.5 13H11C10.7 13 10.5 12.8 10.5 12.5V10.75V10.25V9.25C10.5 8.85 10.15 8.5 9.75 8.5C9.35 8.5 9 8.85 9 9.25V10.25V10.75V12.5C9 12.8 8.8 13 8.5 13H7C6.7 13 6.5 12.8 6.5 12.5V6.5C6.5 6.2 6.7 6 7 6H9C9.15 6 9.25 6.05 9.35 6.15C9.65 6.05 9.95 6 10.25 6C11.75 6 13 7.25 13 8.75V12.5Z"
                                                fill="#555555" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(request()->url()) }}"
                                        target="_blank">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.42187 5.88L13.5625 0H12.25L7.83125 5.04L4.375 0H0L5.38125 7.84L0 14H1.3125L5.97187 8.68L9.625 14H14L8.42187 5.88ZM1.94687 0.933333H3.69687L12.0312 13.0667H10.2812L1.94687 0.933333Z"
                                                fill="#555555" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @if ($relatedPosts->count() > 0)
                        <div class="details-navigation">
                            @foreach ($relatedPosts->take(2) as $index => $relatedPost)
                                @if ($index === 0)
                                    <a href="{{ route('post.show', $relatedPost->slug) }}" class="navigation-arrow">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.55458 7.37568L10.6748 0.255608C10.8395 0.090796 11.0593 0 11.2937 0C11.5281 0 11.7479 0.090796 11.9126 0.255608L12.437 0.779831C12.7782 1.12142 12.7782 1.6766 12.437 2.01767L6.45797 7.99668L12.4436 13.9823C12.6083 14.1471 12.6992 14.3668 12.6992 14.6011C12.6992 14.8357 12.6083 15.0554 12.4436 15.2203L11.9193 15.7444C11.7544 15.9092 11.5347 16 11.3003 16C11.0659 16 10.8461 15.9092 10.6814 15.7444L3.55458 8.61782C3.3895 8.45248 3.29884 8.23174 3.29936 7.99707C3.29884 7.7615 3.3895 7.54088 3.55458 7.37568Z"
                                                fill="#333333" />
                                        </svg>
                                        prev
                                        <p>{{ $relatedPost->title }}</p>
                                    </a>
                                @else
                                    <div class="line-shape">
                                        <svg width="1" height="46" viewBox="0 0 1 46" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="1" height="46" fill="black" fill-opacity="0.1" />
                                        </svg>
                                    </div>
                                    <a href="{{ route('post.show', $relatedPost->slug) }}" class="navigation-arrow">
                                        <p>{{ $relatedPost->title }}</p>
                                        next
                                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.44542 7.37568L2.32522 0.255608C2.16054 0.090796 1.9407 0 1.7063 0C1.47189 0 1.25206 0.090796 1.08738 0.255608L0.563023 0.779831C0.221823 1.12142 0.221823 1.6766 0.563023 2.01767L6.54203 7.99668L0.556389 13.9823C0.391707 14.1471 0.300781 14.3668 0.300781 14.6011C0.300781 14.8357 0.391707 15.0554 0.556389 15.2203L1.08074 15.7444C1.24555 15.9092 1.46526 16 1.69966 16C1.93407 16 2.1539 15.9092 2.31859 15.7444L9.44542 8.61782C9.6105 8.45248 9.70116 8.23174 9.70064 7.99707C9.70116 7.7615 9.6105 7.54088 9.44542 7.37568Z"
                                                fill="#333333" />
                                        </svg>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area">
                        <div class="single-widget style-2 mb-30">
                            <form action="{{ route('filamentblog.post.search') }}" method="GET">
                                <div class="search-box">
                                    <input type="text" name="search" placeholder="Search Here..." />
                                    <button type="submit"><i class="bx bx-search"></i></button>
                                </div>
                            </form>
                        </div>
                        @if ($categories->count())
                            <div class="single-widget mb-30">
                                <h5 class="widget-title">Category:</h5>
                                <ul class="category-list">
                                    @foreach ($categories as $category)
                                        <li class="category-list-wrap">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $category->id }}"
                                                    {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'checked' : '' }} />
                                                <label class="form-check-label">
                                                    {{ $category->name }}
                                                </label>
                                            </div>
                                            <span>({{ $category->posts_count }})</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($relatedPosts->count() > 2)
                            <div class="single-widget mb-30">
                                <h5 class="widget-title">Related Posts:</h5>
                                @foreach ($relatedPosts->skip(2) as $relatedPost)
                                    <div class="recent-post-widget mb-20">
                                        <div class="recent-post-img">
                                            <a href="{{ route('post.show', $relatedPost->slug) }}">
                                                <img src="{{ $relatedPost->featurePhoto }}"
                                                    alt="{{ $relatedPost->title }}" />
                                            </a>
                                        </div>
                                        <div class="recent-post-content">
                                            <a
                                                href="{{ route('post.show', $relatedPost->slug) }}">{{ $relatedPost->formattedPublishedDate() }}</a>
                                            <h6>
                                                <a
                                                    href="{{ route('post.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @if ($post->comments->count())
                <div id="comment-area" class="comments-area">
                    <h3>Comments ({{ $post->comments->count() }})</h3>
                    <div class="comments-list">
                        @foreach ($post->comments as $comment)
                            <div class="single-comment">
                                <div class="comment-author">
                                    <img src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}" />
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6>{{ $comment->user->name }}</h6>
                                        <span>{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
