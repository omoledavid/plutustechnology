@if ($posts && $posts->count())
    <div class="blog-section pb-120 pt-120">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="section-title">
                        <span class="sub-title">Our News & Blogs </span>
                        <h2>Innovative Insights for Solutions & Blogs</h2>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end  wow animate fadeInRight" data-wow-delay="200ms"
                    data-wow-duration="2000ms">
                    <div class="section-title">
                        <p>
                            At our digital agency, we focus on innovative strategies that
                            elevate brands team excels in creating engaging content, dynamic
                            web design, and targeted marketing campaigns.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-md-4 gy-5 align-items-center justify-content-center">
                @foreach ($posts as $post)
                    <x-post-card :$post />
                @endforeach
            </div>
        </div>
    </div>
@endif
