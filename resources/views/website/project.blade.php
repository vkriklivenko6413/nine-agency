@extends('website.layouts.app')

@section('content')
    <div>
        <div class="flex flex-col w-full md:py-40 py-20 m-container">
            <p class="typography_p1__0Ljmd undefined text-white">{{ $project->title }}</p>
            <p class="typography_body__0hry6 w-full  text-white">
                {{ $project->description }}
            </p>
            <div class="md:flex space-x-6 hidden">
                <div class="flex flex-col">
                    <img src="{{ asset('website/projectDetailsImage.png') }}" alt="project" class="w-full mt-8">
                    <img src="{{ asset('website/projectDetailsImage3.png') }}" alt="project" class="w-full mt-8">
                </div>
                <div class="flex flex-col">
                    <img src="{{ asset('website/projectDetailsImage1.png') }}" alt="project" class="w-full mt-8">
                    <img src="{{ asset('website/projectDetailsImage4.png') }}" alt="project" class="w-full mt-8">
                </div>
            </div>
            <div class="flex flex-col md:hidden">
                <img src="{{ asset('website/projectDetailsImage.png') }}" alt="project" class="w-full mt-8">
                <img src="{{ asset('website/projectDetailsImage3.png') }}" alt="project" class="w-full mt-8">
                <img src="{{ asset('website/projectDetailsImage1.png') }}" alt="project" class="w-full mt-8">
                <img src="{{ asset('website/projectDetailsImage4.png') }}" alt="project" class="w-full mt-8">
            </div>
        </div>
    </div>
@endsection
