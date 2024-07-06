@extends('website-n.layouts.app')

@section('title', $project->title)

@section('main')
    <main class="page">
        <section class="page__case case-page">
            <div class="case-page__container">
                <div class="case-page__info">
                    <div class="case-page__title">{{ $project->title }}</div>
                    <div class="case-page__text">
                        {{ $project->description }}
                    </div>
                </div>
                <div class="case-page__items">
                    @foreach ($project->getMedia('images') as $media)
                        <div class="case-page__item">
                            <img src="{{ $media->getUrl() }}" alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
