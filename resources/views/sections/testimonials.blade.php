@php
    $sectionData = \App\View\Helpers\PageSectionHelper::getSection('home', 'testimonies');
@endphp
@if ($sectionData)
    <div class="news-and-testimonial">
        <div class="container-fluid container-rextfy">
            <div class="row align-items-center justify-content-between g-4 gy-5">
                <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="testimonial-content">
                        <div class="section-title style-2 white">
                            <span class="sub-title">{{ $sectionData->content['title'] }}</span>
                            <h2>{{ $sectionData->content['subtitle'] }}</h2>
                            <p>{{ $sectionData->content['description'] }}</p>
                        </div>
                        <ul class="bottom-content">
                            @if ($sectionData->content['button-text'])
                                <li>
                                    <a class="primary-btn-three three" data-text="View All Reviews"
                                        href="{{ $sectionData->content['button-url'] }}">
                                        <span>View All Reviews</span>
                                    </a>
                                </li>
                            @endif
                            <li class="rating-area">
                                <div class="ratting-wrap">
                                    <div class="ratting-number">
                                        <span>4.8</span>
                                    </div>
                                    <div class="star-ratting">
                                        <div class="star-svg">
                                            <svg width="109" height="14" viewBox="0 0 109 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.55259 10.4741L10.9197 9.62226L12.2676 13.6698L7.55259 10.4741ZM15.1863 5.36109H9.3489L7.55259 0.248047L5.75627 5.36109H0.143555L4.85855 8.55674L3.06224 13.6698L7.77724 10.4741L10.6959 8.55674L15.1863 5.36109ZM30.9029 10.4741L34.2691 9.62226L35.6161 13.6698L30.9011 10.4741H30.9029ZM38.3111 5.36109H32.4737L30.6774 0.248047L28.882 5.36109H23.0437L27.7596 8.55674L25.9624 13.6698L30.6783 10.4741L33.5961 8.55674L38.3111 5.36109ZM54.2524 10.4741L57.6204 9.62226L58.9674 13.6698L54.2524 10.4741ZM61.6614 5.36109H55.8241L54.0277 0.248047L52.2314 5.36109H46.3941L51.1099 8.55674L49.5374 13.6698L54.2524 10.4741L57.1711 8.55674L61.6614 5.36109ZM77.3781 10.4741L80.7452 9.62226L82.0922 13.6698L77.3781 10.4741ZM85.0118 5.36109H79.1735L77.3781 0.248047L75.5818 5.36109H69.7444L74.4585 8.55674L72.6631 13.6698L77.3781 10.4741L80.2968 8.55674L85.0118 5.36109ZM100.728 10.4741L104.096 9.62226L105.443 13.6698L100.728 10.4741ZM108.137 5.36109H102.299L100.503 0.248047L98.9312 5.36109H93.0939L97.8089 8.55674L96.0125 13.6698L100.728 10.4741L103.646 8.55674L108.137 5.36109Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div class="star-fill" style="width:88%;"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <span>From 200+ Reviews</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="testimonial-swiper-wrapper">
                        <div class="testimonial-slider-card">
                            <div class="swiper testimonial-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($sectionData->content['data'] as $testimony)
                                        <x-testimony-card :name="$testimony['name']"
                                            :position="$testimony['position']" :testimony="$testimony['testimony']"
                                            :image="$testimony['image']" />
                                    @endforeach
                                </div>
                            </div>
                            <div class="testimonial-ellipse">
                                <img src="assets/image/banner-img/elips-shape.png" alt="" />
                            </div>
                        </div>
                        <div class="pagination-area">
                            <div class="swiper-pagination1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
