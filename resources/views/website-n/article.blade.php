@extends('website-n.layouts.app')

@section('main')
    <main class="page">
        <section class="page__more more-page">
            <div class="more-page__container">
                <div class="more-page__info">
                    <div class="more-page__title">{{ $article->title }}</div>
                    <div class="more-page__label">{{ $article->created_at->format('d M Y') }}</div>
                </div>
                <div class="more-page__body">
                    <div class="more-page__img">
                        <img src="{{ $article->getFirstMediaUrl('images') }}" alt="" />
                    </div>
                    <div class="more-page__text">
                        <p>
                            {{ $article->description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
