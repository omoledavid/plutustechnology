<x-app-layout>
    <x-banner pageName="{{ $pageTitle }}" />
    <div class="project-section pt-100">
        <div class="container">
            <div class="row justify-content-center mb-60 text-center">
                <div class="col-lg-6">
                    <div class="section-title wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms;">
                        <span class="sub-title">Our Projects</span>
                        <h2>Discover Our Latest Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 wow animate fadeInUp"
                        data-wow-delay="{{ 200 + $loop->index * 100 }}ms">
                        <div class="single-project-card">
                            <div class="project-img">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                    class="img-fluid">
                                <div class="project-content">
                                    <div class="category-wrap">
                                        <span class="category">{{ $project->category }}</span>
                                    </div>
                                    <h4><a href="{{ route('project.show', $project->slug) }}">{{ $project->title }}</a>
                                    </h4>
                                    <p>{{ Str::limit($project->description, 100) }}</p>
                                    <a href="{{ route('project.show', $project->slug) }}" class="details-btn">
                                        View Details
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.9333 5.17169L14.7147 5.28176L14.7459 5.28111C14.8444 5.28306 14.9333 5.32165 14.9998 5.38377L15.0329 5.41852C15.0917 5.48802 15.1261 5.57876 15.1233 5.67737L15.1205 5.70367L14.9608 11.4792C14.9548 11.6929 14.777 11.8627 14.5636 11.8586C14.3502 11.8545 14.182 11.6779 14.188 11.4642L14.3242 6.53217L5.39885 15.0427C5.24379 15.1909 4.99913 15.1861 4.85241 15.0321C4.7057 14.8781 4.71249 14.6331 4.86757 14.485L13.7087 6.03747L8.91191 5.94457C8.69851 5.94039 8.53027 5.76387 8.53619 5.55017C8.54213 5.33647 8.71991 5.16751 8.9333 5.17169ZM14.718 5.60562L14.5561 11.4717L14.7177 5.66907L14.7167 5.66797L14.6857 5.66867L14.6527 5.66807L14.718 5.60562Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        .single-project-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .single-project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        }

        .project-img {
            position: relative;
            overflow: hidden;
        }

        .project-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .single-project-card:hover .project-img img {
            transform: scale(1.1);
        }

        .project-content {
            padding: 25px;
            background: #fff;
        }

        .category-wrap {
            margin-bottom: 15px;
        }

        .category {
            background: #10c581;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
        }

        .project-content h4 {
            margin-bottom: 15px;
            font-size: 20px;
        }

        .project-content h4 a {
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .project-content h4 a:hover {
            color: #10c581;
        }

        .project-content p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .details-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #10c581;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .details-btn:hover {
            color: #0ca06b;
        }

        .details-btn svg {
            transition: all 0.3s ease;
        }

        .details-btn:hover svg {
            transform: translateX(5px);
        }

        .details-btn svg path {
            fill: currentColor;
        }
    </style>
</x-app-layout>
