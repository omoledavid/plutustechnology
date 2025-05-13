@php
    $sectionData = \App\View\Helpers\PageSectionHelper::getSection('home', 'team');
@endphp
@if ($sectionData)
    <div class="team-section pt-120 pb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-center text-center wow animate fadeInUp"
                    data-wow-delay="400ms" data-wow-duration="1500ms ">
                    <div class="section-title">
                        <span class="sub-title">{{ $sectionData->content['title'] }}</span>
                        <h2>{{ $sectionData->content['subtitle'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="team-slider-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper team-slider">
                            <div class="swiper-wrapper">
                                @foreach ($sectionData->content['data'] as $team)
                                    <x-team-card :$team />
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-area">
                    <div class="swiper-pagination2"></div>
                </div>
            </div>
        </div>
    </div>
@endif
