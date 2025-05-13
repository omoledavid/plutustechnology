<x-app-layout>
    <x-banner pageName="{{$pageTitle}}" />
    @include('sections.about-us')
    @include('sections.teams')
    @include('sections.testimonials')
    @include('sections.blog')
</x-app-layout>