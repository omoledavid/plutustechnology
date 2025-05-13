@php
    $sectionData = \App\View\Helpers\PageSectionHelper::getSection('home', 'services');
@endphp
@if ($sectionData && $services)
    <div class="solutions-section pb-120 pt-120">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-lg-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="2000ms">
                    <div class="section-title two white">
                        <span class="sub-title dark-white">{{ $sectionData->content['title'] }}</span>
                        <h2>{!! $sectionData->content['subtitle'] !!}</h2>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-xl-end wow animate fadeInRight" data-wow-delay="200ms"
                    data-wow-duration="2000ms">
                    <div class="section-title">
                        <p>{{ $sectionData->content['description'] }}</p>
                        <div class="view-btn">
                            <a href="{{ route('services') }}" class="primary-button">View All Services </a>
                            <div class="icon">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.4581 7.60306L17.7791 7.45484L17.8222 7.45222C18.0002 7.44727 18.1676 7.50811 18.3104 7.63492L18.3553 7.68066C18.4554 7.79401 18.5147 7.93872 18.5218 8.11434L18.5213 8.17761L18.3729 13.512C18.3619 13.9065 18.0338 14.2343 17.6389 14.2453C17.2417 14.2564 16.9278 13.9427 16.9388 13.5459L17.0411 9.86248L9.4264 17.4701C9.13964 17.7566 8.68559 17.7692 8.41229 17.4962C8.13899 17.2232 8.15163 16.7696 8.43838 16.4831L15.992 8.93652L12.4243 9.03574C12.027 9.04679 11.7131 8.73317 11.7242 8.33632C11.7352 7.94184 12.0633 7.61404 12.4581 7.60306Z"
                                        fill="#10C581" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 d-flex align-items-xl-center">
                    <ul class="services-list">
                        @foreach ($services as $service)
                            <x-service-card :$service />
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-5">
                    <ul class="service-img-group">
                        <li class="active">
                            <div class="service-img">
                                <img src="assets/image/banner-img/digital-marketing.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="service-img">
                                <img src="assets/image/banner-img/development.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="service-img">
                                <img src="assets/image/banner-img/ui-ux.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="service-img">
                                <img src="assets/image/banner-img/cyber-security.png" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="service-img">
                                <img src="assets/image/banner-img/data-analysis.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
