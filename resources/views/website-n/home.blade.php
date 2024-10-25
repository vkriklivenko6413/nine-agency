@extends('website-n.layouts.app-home')

@section('title', __('Home'))

@section('main')
    <main class="page">
        @if($homepageVariables->{'intro_features_visible'} ?? false)
            <section class="page__main-section main-section" id="get_started" style="margin-bottom: 0 !important">
            <div class="main-section__container">
                <div class="main-section__info">
                    <div class="main-section__svg">
                        <svg width="1032" height="883" viewBox="0 0 1032 883" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_f_22_933)">
                                <ellipse cx="516" cy="420.5" rx="208" ry="154.5" fill="#EE2F36"
                                    fill-opacity="0.5"></ellipse>
                            </g>
                            <defs>
                                <filter id="filter0_f_22_933" x="0" y="-42" width="1032" height="925"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
                                    <feblend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                    </feblend>
                                    <fegaussianblur stdDeviation="154" result="effect1_foregroundBlur_22_933">
                                    </fegaussianblur>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <h1 class="main-section__title">
                        <div class="main-section__top-title">
                            {{ $homepageVariables->{'intro_title_' . app()->getLocale()} ?? '' }}
                        </div>

                        @php
                            $locale = app()->getLocale();
                            $introFeatures = $homepageVariables->{'intro_features_' . $locale} ?? '';
                            $features = explode(',', $introFeatures);
                        @endphp

                        <div class="text-animation">
                            @foreach ($features as $feature)
                                <div class="item1">{{ $feature }}</div>
                            @endforeach
                        </div>
                    </h1>
                    <div class="main-section__text">
                        {{ $homepageVariables->{'intro_text_' . app()->getLocale()} ?? '' }}
                    </div>
                    <a href="{{ $homepageVariables->meeting_url ?? '' }}"
                        class="main-section__button button">{{ __('Book A Meeting') }}</a>
                    <div class="main-section__label">
                        {{ __('TRUSTED BY AMAZING BRANDS') }}
                    </div>
                </div>
                <div class="main-section__company company-main company-main-pc">
                    <div class="company-main__items items-wrap">
                        <div class="brands-scroll__items items marquee">
                            @foreach ($clients as $client)
                                <a href="javascript:void(0)" class="company-main__item item">
                                    <img src="{{ Storage::url($client->logo) }}" alt="" />
                                </a>
                            @endforeach
                        </div>
                        <div aria-hidden="true" class="items marquee">
                            @foreach ($clients as $client)
                                <a href="javascript:void(0)" class="company-main__item item">
                                    <img src="{{ Storage::url($client->logo) }}" alt="" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="main-section__company company-main company-main-mobile">
                    <div class="company-main__items  items-wrap">
                        <div class="brands-scroll__items items marquee">
                            @foreach ($clients as $client)
                                <div class="company-main__item">
                                    <img src="{{ Storage::url($client->logo) }}" alt="" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @if($homepageVariables->{'projects_features_visible'} ?? false)
            <div id="projects" class="page__with-us with-us" style="padding-top: 5rem">
            <div class="with-us__container">
                <h3 class="with-us__title title">
                    {{ $homepageVariables->{'projects_section_title_' . app()->getLocale()} ?? '' }}
                </h3>
                <div class="with-us__text text">
                    {{ $homepageVariables->{'projects_section_text_' . app()->getLocale()} ?? '' }}
                </div>
                <div class="with-us__items">
                    @foreach ($projects as $index => $project)
                        @if ($index % 3 == 0)
                            <div class="with-us__item">
                                <div class="with-us__wrapper">
                                    <img src="{{ $project->getFirstMediaUrl('images.' . app()->getLocale()) }}" alt="{{ $project->title }}"
                                        class="small" />
                                    <div class="company-main__info">
                                        <div class="company-main__title">
                                            {{ $project->title }}
                                        </div>
                                        <div class="company-main__text">
                                            {{ substr($project->description, 0, 50) }}...
                                        </div>
                                        <a href="{{ route('website.project', $project->slug) }}"
                                            class="company-main__more">{{ __('See more') }}</a>
                                    </div>
                                </div>
                            </div>
                        @elseif($index % 3 == 1)
                            <div class="with-us__item two">
                                <div class="with-us__wrapper">
                                    <img src="{{ $project->getFirstMediaUrl('images.' . app()->getLocale()) }}" alt="{{ $project->title }}" />
                                    <div class="company-main__info">
                                        <div class="company-main__title">
                                            {{ $project->title }}
                                        </div>
                                        <div class="company-main__text">
                                            {{ substr($project->description, 0, 50) }}...
                                        </div>
                                        <a href="{{ route('website.project', $project->slug) }}"
                                            class="company-main__more">{{ __('See more') }}</a>
                                    </div>
                                </div>
                            @else
                                <div class="with-us__wrapper">
                                    <img src="{{ $project->getFirstMediaUrl('images.' . app()->getLocale()) }}" alt="{{ $project->title }}" />
                                    <div class="company-main__info">
                                        <div class="company-main__title">
                                            {{ $project->title }}
                                        </div>
                                        <div class="company-main__text">
                                            {{ substr($project->description, 0, 50) }}...
                                        </div>
                                        <a href="{{ route('website.project', $project->slug) }}"
                                            class="company-main__more">{{ __('See more') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                {{-- <a href=""
                    class="with-us__more">See all projects</a> --}}
            </div>
        </div>
        @endif
        @if($homepageVariables->{'seo_features_visible'} ?? false)
            <section class="seo-page seo-page-pc">
            <div class="seo-page__container grid">
                <div class="grid__tile grid__tile--text">
                    <div class="seo-page__title title title-left">
                        {{ $homepageVariables->{'seo_section_title_' . app()->getLocale()} ?? '' }}
                    </div>
                    <div class="seo-page__text text text-left">
                        {{ $homepageVariables->{'seo_section_text_' . app()->getLocale()} ?? '' }}
                    </div>
                </div>
                @foreach($seos as $seo)
                    <div class="seo-page__item item-seo item-seo--gray grid__tile">
                        <div class="item-seo__image">
                            <img src="{{ $seo->getFirstMediaUrl('images.' . app()->getLocale()) }}" alt="{{ $seo->title }}" />
                        </div>
                        <div class="seo-item__info">
                            <div class="company-main__title">
                                {{ $seo->title }}
                            </div>
                            <div class="seo-item__text">
                                {{ substr($seo->description, 0, 50) }}...
                            </div>
                            <a href="{{ route('website.seo.show', $seo->slug) }}"
                               class="company-main__more">{{ __('See more') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
            <div class="seo-page__mobile mobile-seo">
            <div class="seo-page__container grid">
                <div class="grid__tile grid__tile--text">
                    <div class="seo-page__title title title-left">
                        {{ $homepageVariables->{'seo_section_title_' . app()->getLocale()} ?? '' }}
                    </div>
                    <div class="seo-page__text text text-left">
                        {{ $homepageVariables->{'seo_section_text_' . app()->getLocale()} ?? '' }}
                    </div>
                </div>
                <div class="mobile-seo__wrapper">
                    @foreach($seos as $seo)
                        <div class="seo-page__item item-seo item-seo--gray grid__tile">
                            <div class="item-seo__image">
                                <img src="{{ $seo->getFirstMediaUrl('images.' . app()->getLocale()) }}" alt="{{ $seo->title }}" />
                            </div>
                            <div class="seo-item__info">
                                <div class="company-main__title">
                                    {{ $seo->title }}
                                </div>
                                <div class="seo-item__text">
                                    {{ substr($seo->description, 0, 50) }}...
                                </div>
                                <a href="{{ route('website.seo.show', $seo->slug) }}"
                                   class="company-main__more">{{ __('See more') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        @if($homepageVariables->{'marketing_features_visible'} ?? false)
            <section class="page__marketing marketing-page">
            <div class="marketing-page__container">
                <div class="marketing-page__info">
                    <div class="marketing-page__title title">
                        {{ $homepageVariables->{'marketing_section_title_' . app()->getLocale()} ?? '' }}
                    </div>
                    <div class="marketing-page__text text">
                        {{ $homepageVariables->{'marketing_section_text_' . app()->getLocale()} ?? '' }}
                    </div>
                </div>
                <div class="marketing-page__items">
                    <div class="marketing-page__item item-marketing">
                        <div class="item-marketing__info">
                            <div class="item-marketing__number">{{ $homepageVariables->years_experience ?? '' }}+</div>
                            <div class="item-marketing__label">
                                {{ __('years of experience') }}
                            </div>
                        </div>
                        <div class="item-marketing__img">
                            <img src="{{ Storage::url($homepageVariables->years_experience_img ?? '') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="marketing-page__item item-marketing">
                        <div class="item-marketing__info">
                            <div class="item-marketing__number">{{ $homepageVariables->team_members ?? '' }}+</div>
                            <div class="item-marketing__label">
                                {{ __('team members') }}
                            </div>
                        </div>
                        <div class="item-marketing__img">
                            <img src="{{ Storage::url($homepageVariables->team_members_img ?? '') }}" alt="" />
                        </div>
                    </div>
                    <div class="marketing-page__item item-marketing">
                        <div class="item-marketing__info">
                            <div class="item-marketing__number">
                                {{ $homepageVariables->satisfied_clients ?? '' }}+
                            </div>
                            <div class="item-marketing__label">
                                {{ __('satisfied clients') }}
                            </div>
                        </div>
                        <div class="item-marketing__img">
                            <img src="{{ Storage::url($homepageVariables->satisfied_clients_img ?? '') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="marketing-page__item item-marketing">
                        <div class="item-marketing__info">
                            <div class="item-marketing__number">
                                {{ $homepageVariables->company_videos ?? '' }}+
                            </div>
                            <div class="item-marketing__label">
                                {{ __('company videos created') }}
                            </div>
                        </div>
                        <div class="item-marketing__img">
                            <img src="{{ Storage::url($homepageVariables->company_videos_img ?? '') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @if($homepageVariables->{'videos_features_visible'} ?? false)
            <section id="tranding" class="tranding">
            <div class="tranding__container">
                <h3 class="text-center title tranding__title">
                    {{ $homepageVariables->{'videos_section_title_' . app()->getLocale()} ?? '' }}
                </h3>
                <h1 class="text-center text text-slider tranding__text">
                    {{ $homepageVariables->{'videos_section_text_' . app()->getLocale()} ?? '' }}
                </h1>
            </div>
            <div class="tranding__container">
                <div
                    class="swiper tranding-slider swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress">
                    <div class="swiper-wrapper" id="swiper-wrapper-cbf303a6829da577" aria-live="polite">
                        @foreach ($videos as $key => $video)
                            <div class="swiper-slide tranding-slide" data-swiper-slide-index="{{ $key + 1 }}"
                                role="group">
                                <div class="tranding-slide-img" data-video-url="{{ $video->video }}">
                                    <img src="{{ $video->getFirstMediaUrl('images') }}" />
                                    <img src="{{ asset('website-src/img/download.svg') }}" class="download-svg"
                                        style="z-index: 5000" />
                                </div>
                                <iframe class="slide__video video-slide" loading="lazy" width="558" height="406"
                                    src="{{ $video->video }}" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <div class="swiper-slide-shadow-left"></div>
                                <div class="swiper-slide-shadow-right"></div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper__buttons">
                        <button type="button" class="swiper-button-prev" tabindex="0" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-cbf303a6829da577">
                            <img src="{{ asset('website-src/img/arrow.svg') }}" alt="" />
                        </button>
                        <button type="button" class="swiper-button-next" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-cbf303a6829da577">
                            <img src="{{ asset('website-src/img/arrow.svg') }}" alt="" />
                        </button>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>
        @endif
        @if($homepageVariables->{'ai_features_visible'} ?? false)
            <section class="page__ai ai-page">
            <div class="ai-page__container">
                <div class="ai-page__info">
                    <div class="ai-page__title title">
                        {{ $homepageVariables->{'ai_section_title_' . app()->getLocale()} ?? '' }}
                    </div>
                    <div class="ai-page__text text">
                        {{ $homepageVariables->{'ai_section_text_' . app()->getLocale()} ?? '' }}
                    </div>
                </div>
                <div class="ai-page__items">
                    <div class="ai-page__item">
                        <img src="{{ Storage::url($homepageVariables->ai_section_img_1 ?? '') }}" alt="" />
                    </div>
                    <div class="ai-page__item">
                        <img src="{{ Storage::url($homepageVariables->ai_section_img_2 ?? '') }}" alt="" />
                    </div>
                    <div class="ai-page__item">
                        <img src="{{ Storage::url($homepageVariables->ai_section_img_3 ?? '') }}" alt="" />
                    </div>
                </div>
            </div>
        </section>
        @endif
        @if($homepageVariables->{'news_features_visible'} ?? false)
            <section class="page__stay stay-page" style="margin-bottom: 0 !important">
            <div class="stay-page__container">
                <div class="stay-page__title title">
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
                                        {{ substr($article->description, 0, 200) }}...
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
                <a href="{{ route('website.news') }}" class="with-us__more">
                    {{ __('Read all news') }}
                </a>
            </div>
        </section>
        @endif
        @if($homepageVariables->{'contact_features_visible'} ?? false)
            <section class="page__contact conatact-page" id="contact" style="padding-top: 10rem">
            <div class="con__container">
                <div class="conatact-page__info">
                    <div class="conatact-page__title title">
                        {{ $homepageVariables->{'contact_section_title_' . app()->getLocale()} ?? '' }}
                    </div>
                    <div class="conatact-page__text text">
                        {{ $homepageVariables->{'contact_section_text_' . app()->getLocale()} ?? '' }}
                    </div>
                </div>
            </div>

            <div class="conatact-page__container">
                <div class="conatact-page__left left-contact">
                    <div class="left-contact__items">
                        <div class="left-contact__item">
                            <div class="left-contact__title">
                                {{ __('Contact us') }}
                            </div>
                            <a href="tel:{{ $homepageVariables->contact_phone ?? '' }}" class="left-contact__label">
                                {{ $homepageVariables->contact_phone ?? '' }}
                            </a>
                        </div>
                        <div class="left-contact__item">
                            <div class="left-contact__title">
                                {{ __('Email') }}
                            </div>
                            <a href="mailto:{{ $homepageVariables->contact_email ?? '' }}" class="left-contact__label">
                                {{ $homepageVariables->contact_email ?? '' }}
                            </a>
                        </div>
                        <div class="left-contact__item">
                            <div class="left-contact__title">
                                {{ __('Address') }}
                            </div>
                            <div class="left-contact__label">
                                {{ $homepageVariables->contact_address ?? '' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conatact-page__right right-contact">
                    <form method="post" action="{{ route('website.contact.send') }}" class="right-contact__form">
                        @csrf
                        <input data-required="" autocomplete="off" type="text" name="name"
                            placeholder="{{ __('Name') }}" class="right-contact__input input" />
                        <input data-required="" autocomplete="off" type="number" name="phone"
                            placeholder="{{ __('Phone') }}" class="right-contact__input input" />
                        <textarea data-required="" name="message" id="" cols="20" rows="9"
                            class="right-contact__input-area right-contact__input input" placeholder="{{ __('Message') }}"></textarea>
                        <button type="submit" class="right-contact__button button">
                            {{ __('Send a message') }}
                        </button>
                    </form>
                </div>
            </div>
        </section>
        @endif
    </main>

    @if (session('success'))
        <div class="popup-overlay">
            <div class="popup-content">
                <p>{{ session('success') }}</p>
                <button onclick="this.parentElement.parentElement.style.display='none'">OK</button>
            </div>
        </div>
    @endif

@endsection
