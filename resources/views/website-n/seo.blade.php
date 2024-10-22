@extends('website-n.layouts.app')

@section('title', $seo->title)

@section('main')
    <main class="page">
        <section class="page__case case-page">
            <div class="case-page__container">
                <div class="case-page__info">
                    <div class="case-page__title text-center">{{ $seo->title }}</div>
                    <div class="case-page__text text-center">
                        {{ $seo->description }}
                    </div>
                </div>
                <div class="case-page__items">
                    @foreach ($seo->getMedia('images.' . app()->getLocale()) as $media)
                        <div class="case-page__item">
                            <img src="{{ $media->getUrl() }}" alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
