@extends('website.layouts.app')

@section('content')
    <div class="flex flex-col w-full md:py-40 py-20 m-container">
        <p class="typography_p1__0Ljmd undefined text-white">{{ $article->title }}</p>
        <p class="typography_body__0hry6 mb-4 text-white">{{ $article->created_at->format('d M Y') }}</p>
        <img src="{{ $article->getFirstMediaUrl('images') }}" alt="Lorem ipsum dolor sit amet consectetur"
            class="w-full md:h-[575px] h-[265px] object-cover mb-4 md:mb-8 rounded-[16px]">
        <p class="typography_body__0hry6 w-full text-white">
            {{ $article->description }}
        </p>
    </div>
@endsection
