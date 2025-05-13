<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Firefly\FilamentBlog\Enums\PostStatus;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(): View
    {
        $pageTitle = 'Home';
        $services = Service::query()->get();
        $projects = Project::query()->latest()->limit(6)->get();
        return view('pages.home', compact('pageTitle', 'services', 'projects'));
    }
    public function about(): View
    {
        $pageTitle = 'About Us';
        $posts = Post::where('status', PostStatus::PUBLISHED)->latest()->get();

        return view('pages.about', compact('pageTitle', 'posts'));
    }
    public function services(): View
    {
        $pageTitle = 'Our Services';
        $services = Service::query()->latest()->get();
        return view('pages.services.index', compact('pageTitle', 'services'));
    }
    public function serviceShow($slug): View
    {
        $service = Service::query()->where('slug', $slug)->firstOrFail();
        $pageTitle = 'Service Details - ' . $service->title;
        $services = Service::query()->latest()->get();
        return view('pages.services.show', compact('pageTitle', 'service', 'services'));
    }
    public function projects(): View
    {
        $pageTitle = 'Our Projects';
        $projects = Project::query()->latest()->get();
        return view('pages.projects.index', compact('pageTitle', 'projects'));
    }
    public function projectShow($slug): View
    {
        $project = Project::query()->where('slug', $slug)->firstOrFail();
        $pageTitle = 'Project Details - ' . $project->title;
        $projects = Project::query()->where('id', '!=', $project->id)->latest()->limit(3)->get();
        return view('pages.projects.show', compact('pageTitle', 'project', 'projects'));
    }
    public function blog(): View
    {
        $pageTitle = 'Insights ';
        // Fetching the latest main post, if available
        $posts = Post::where('status', PostStatus::PUBLISHED)->latest()->paginate(9);

        $categories = Category::query()->whereHas('posts')->latest()->get();
        return view('pages.blog.index', compact('pageTitle', 'posts', 'categories'));
    }
    public function contact(): View
    {
        $pageTitle = 'Contact';
        return view('contact', compact('pageTitle'));
    }
    public function portfolio(): View
    {
        return view('portfolio');
    }
    public function team(): View
    {
        return view('team');
    }
    public function viewPost($slug): View
    {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        $pageTitle = $post->title;

        $categories = Category::query()->withCount('posts')->orderByDesc('posts_count')->get();

        // Get related posts based on shared categories (excluding the current post)
        $relatedPosts = Post::whereHas('categories', function ($query) use ($post) {
            $query->whereIn(
                config('filamentblog.tables.prefix') . 'categories.id',  // Correctly prefixed table name
                $post->categories->pluck('id')
            );
        })
            ->where('id', '!=', $post->id) // Exclude the current post
            ->with(['categories', 'user'])
            ->limit(5)
            ->get();


        $post->load([
            'user',
            'categories',
            'tags',
            'comments' => fn($query) => $query->approved(),
            'comments.user'
        ]);


        return view('pages.blog.show', compact('pageTitle', 'post', 'categories', 'relatedPosts'));
    }
}
