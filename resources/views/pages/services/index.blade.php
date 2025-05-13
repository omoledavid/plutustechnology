<x-app-layout>
    <x-banner pageName="{{ $pageTitle }}" />
    <div class="service-section style-2 pt-100">
        <div class="container">
            <div class="row justify-content-center mb-60 text-center">
                <div class="col-lg-6">
                    <div class="section-title wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms;">
                        <span class="sub-title">Our Services</span>
                        <h2>Innovative Service Design to Business.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-wrap">
                        @foreach ($services as $index => $service)
                            <div class="single-services wow animate fadeInUp"
                                data-wow-delay="{{ 200 + $index * 100 }}ms">
                                <div class="step-no">
                                    <h2>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</h2>
                                </div>
                                <h5><a href="{{ route('service.show', $service->slug) }}">{{ $service->title }}</a>
                                </h5>
                                <div class="services-img">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" />
                                </div>
                                <div class="content">
                                    <p>{{ $service->desc }}</p>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('service.show', $service->slug) }}">
                                        <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.8667 10.3415L29.3928 10.5635L29.4552 10.5622C29.6522 10.5661 29.8299 10.6433 29.963 10.7675L30.0292 10.837C30.1468 10.976 30.2155 11.1575 30.21 11.3547L30.2044 11.4073L29.8849 22.9583C29.873 23.3857 29.5174 23.7254 29.0906 23.7172C28.6638 23.7089 28.3274 23.3557 28.3393 22.9284L28.6117 13.0643L10.7977 30.0854C10.4876 30.3817 9.99825 30.3722 9.70482 30.0642C9.4114 29.7562 9.42497 29.2662 9.73515 28.9699L27.4172 12.0749L17.8238 11.8891C17.397 11.8808 17.0606 11.5277 17.0724 11.1003C17.0843 10.6729 17.4399 10.3332 17.8667 10.3415ZM29.4361 11.2112L29.1121 22.9433L29.4355 11.3381L29.4335 11.3359L29.3715 11.3373L29.3054 11.3361L29.4361 11.2112Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
