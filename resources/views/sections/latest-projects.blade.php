@php
    $sectionData = \App\View\Helpers\PageSectionHelper::getSection('home', 'portfolio');
@endphp
@if ($sectionData && $projects->count() > 0)
    <div class="portfolio-section pt-120 pb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-center wow animate fadeInUp"
                    data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="section-title three text-center">
                        <span class="sub-title-three">{{ $sectionData->content['title'] }}</span>
                        <h2>{{ $sectionData->content['subtitle'] }}</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 gy-5">
                @foreach ($projects as $project)
                    <x-project-card :$project />
                @endforeach
                @if ($projects->count() > 6)
                    <div class="view-content-and-button">
                        <p>{{ $sectionData->content['description'] }}</p>
                        <div class="view-btn">
                            <a href="projects-details.html" class="primary-button">View All Services </a>
                            <div class="icon">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.4581 7.60306L17.7791 7.45484L17.8222 7.45222C18.0002 7.44727 18.1676 7.50811 18.3104 7.63492L18.3553 7.68066C18.4554 7.79401 18.5147 7.93872 18.5218 8.11434L18.5213 8.17761L18.3729 13.512C18.3619 13.9065 18.0338 14.2343 17.6389 14.2453C17.2417 14.2564 16.9278 13.9427 16.9388 13.5459L17.0411 9.86248L9.4264 17.4701C9.13964 17.7566 8.68559 17.7692 8.41229 17.4962C8.13899 17.2232 8.15163 16.7696 8.43838 16.4831L15.992 8.93652L12.4243 9.03574C12.027 9.04679 11.7131 8.73317 11.7242 8.33632C11.7352 7.94184 12.0633 7.61404 12.4581 7.60306Z"
                                        fill="#10C581"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
