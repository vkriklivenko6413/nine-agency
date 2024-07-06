@extends('website-n.layouts.app')

@section('title', __('News'))

@section('main')
    <main class="page">
        <section class="page__stay stay-page stay-main">
            <div class="stay-page__container">
                <div class="stay-page__title title stay-title">
                    {{ $homepageVariables->{'news_section_title_' . app()->getLocale()} ?? '' }}
                </div>
                @foreach ($news->chunk(3) as $newsChunk)
                    <div class="stay-page__items" style="padding-bottom: 20px">
                        @foreach ($newsChunk as $article)
                            <div class="stay-page__item">
                                <div class="stay-page__img">
                                    <img src="{{ $article->getFirstMediaUrl('images') }}" alt="news" />
                                </div>
                                <div class="stay-page__body">
                                    <div class="stay-page__date">
                                        {{ $article->created_at->format('d M Y') }}
                                    </div>
                                    <div class="stay-page__text stat-pc">
                                        {{ $article->title }}
                                    </div>
                                    <div class="stay-page__text stay-mb">
                                        {{ substr($article->description, 0, 50) }}...
                                    </div>
                                    <div class="stay-page__more">
                                        <a href="{{ route('website.article', $article->slug) }}">{{ __('Read more') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="line"></div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
