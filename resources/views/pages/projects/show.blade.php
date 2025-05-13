<x-app-layout>
    <x-banner pageName="{{ $pageTitle }}" />
    <div class="project-details pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-details-wrap">
                        <div class="project-details-img mb-50">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                class="img-fluid rounded">
                        </div>
                        <div class="project-details-content">
                            <div class="project-meta mb-4">
                                <span class="category">{{ $project->category }}</span>
                                <span class="date">{{ $project->created_at->format('M d, Y') }}</span>
                            </div>
                            <h2>{{ $project->title }}</h2>
                            <div class="project-description mt-4">
                                {!! $project->body !!}
                            </div>

                            @if ($project->technologies)
                                <div class="project-technologies mt-5">
                                    <h4>Technologies Used</h4>
                                    <div class="technologies-list mt-3">
                                        @foreach (explode(',', $project->technologies) as $tech)
                                            <span class="tech-badge">{{ trim($tech) }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if ($project->client)
                                <div class="project-client-info mt-5">
                                    <h4>Client Information</h4>
                                    <div class="client-details mt-3">
                                        <p><strong>Client:</strong> {{ $project->client }}</p>
                                        @if ($project->website)
                                            <p><strong>Website:</strong> <a href="{{ $project->website }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer">{{ $project->website }}</a></p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-sidebar">
                        <div class="widget project-info">
                            <h4 class="widget-title">Project Information</h4>
                            <div class="project-info-content">
                                <p>{{ $project->description }}</p>
                            </div>
                        </div>
                        @if ($project->features)
                            <div class="widget project-features mt-4">
                                <h4 class="widget-title">Key Features</h4>
                                <ul class="feature-list">
                                    @foreach (explode("\n", $project->features) as $feature)
                                        <li>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <circle cx="8" cy="8" r="8" fill="#10C581" />
                                                <path d="M5 8L7 10L11 6" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            {{ trim($feature) }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .project-details-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .project-meta {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .category {
            background: #10c581;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
        }

        .date {
            color: #666;
            font-size: 14px;
        }

        .project-description {
            line-height: 1.8;
            color: #444;
        }

        .widget {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .widget-title {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
            font-size: 20px;
            color: #333;
        }

        .technologies-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tech-badge {
            background: #e9ecef;
            color: #333;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .feature-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            color: #444;
        }

        .client-details p {
            margin-bottom: 10px;
        }

        .client-details a {
            color: #10c581;
            text-decoration: none;
        }

        .client-details a:hover {
            text-decoration: underline;
        }
    </style>
</x-app-layout>
