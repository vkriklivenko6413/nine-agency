@extends('website.layouts.app')

@section('content')
    <div>
        <div class="flex flex-col w-full md:py-40 py-20 m-container">
            <p class="typography_p1__0Ljmd undefined text-white">Name od case 2</p>
            <p class="typography_body__0hry6 w-full  text-white">Lorem ipsum dolor sit amet consectetur.
                Massa dictum sed consectetur aliquet. Nulla egestas vitae et libero commodo morbi nisl
                sed dolor. Accumsan ultricies tellus nisi aliquet velit iaculis. Egestas tortor senectus
                elementum feugiat odio.</p>
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
