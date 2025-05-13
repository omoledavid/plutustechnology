<x-app-layout>
    <x-banner pageName="{{ $pageTitle }}" />
    <div class="service-details pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-wrap">
                        <div class="service-details-img mb-50">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                                class="img-fluid rounded">
                        </div>
                        <div class="service-details-content">
                            <h2>{{ $service->title }}</h2>
                            <div class="service-description mt-4">
                                {!! $service->body !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="widget service-info">
                            <h4 class="widget-title">Service Information</h4>
                            <div class="service-info-content">
                                <p>{{ $service->desc }}</p>
                            </div>
                        </div>
                        <div class="widget service-list mt-4">
                            <h4 class="widget-title">All Services</h4>
                            <ul class="service-list-items">
                                @foreach ($services as $otherService)
                                    <li class="{{ $otherService->id === $service->id ? 'active' : '' }}">
                                        <a href="{{ route('service.show', $otherService->slug) }}">
                                            {{ $otherService->title }}
                                            @if ($otherService->id === $service->id)
                                                <i class="fas fa-chevron-right"></i>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .service-details-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .widget {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
        }

        .widget-title {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
        }

        .service-list-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list-items li {
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .service-list-items li:hover,
        .service-list-items li.active {
            background: #10c581;
        }

        .service-list-items li:hover a,
        .service-list-items li.active a {
            color: white;
        }

        .service-list-items li a {
            color: #333;
            text-decoration: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .service-description {
            line-height: 1.8;
        }
    </style>
</x-app-layout>
