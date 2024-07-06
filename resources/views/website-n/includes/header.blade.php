<div class="header">
    <div class="header__container">
        <a href="{{ route('website.homepage') }}" class="header__logo">
            @if ($websiteVariables->website_logo ?? '')
                <img src="{{ Storage::url($websiteVariables->website_logo) }}" alt="" />
            @else
                Logo
            @endif
        </a>
        <div class="header__menu menu">
            <div class="menu__line">
                <button type="button" class="menu__icon icon-menu">
                    <span></span>
                </button>
            </div>
            <nav class="menu__body">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="{{ route('website.homepage') . '#get_started' }}" class="menu__link">
                            {{ __('About us') }}</a>
                    </li>
                    <li class="menu__item">
                        <a href="{{ route('website.homepage') . '#projects' }}"
                            class="menu__link">{{ __('Our cases') }}</a>
                    </li>
                    <li class="menu__item">
                        <a href="{{ route('website.news') }}" class="menu__link">{{ __('News') }}</a>
                    </li>
                    <li class="menu__item">
                        <a href="{{ route('website.homepage') . '#contact' }}"
                            class="menu__link">{{ __('Contact') }}</a>
                    </li>
                </ul>

                <div class="header__lang-mob">
                    @foreach (config('app.languages') as $lang => $language)
                        <a href="{{ route('website.lang.switch', $lang) }}"
                            class="lang__item2 {{ app()->getLocale() == $lang ? 'active' : '' }}">{{ strtoupper($language) }}</a>
                    @endforeach
                </div>
            </nav>
        </div>

        <a href="{{ route('website.homepage') . '#get_started' }}"
            class="header__button button button--rgba">{{ __('Get Started') }}</a>

        <div class="header__lang">
            <div class="hover">
                <a href="#" class="lang__item active">{{ strtoupper(app()->getLocale()) }}</a>
                <div class="lang__body">
                    @foreach (config('app.languages') as $lang => $language)
                        @if (app()->getLocale() != $lang)
                            <a href="{{ route('website.lang.switch', $lang) }}" class="lan"
                                style="display: block">{{ $language }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
