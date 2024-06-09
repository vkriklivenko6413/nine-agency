<header class="flex items-center justify-between py-6 bg-background z-50 m-container md:px-0 mx-10">
    <a href="{{ route('website.homepage') }}">
        @if ($websiteVariables->website_logo ?? '')
            <img src="{{ Storage::url($websiteVariables->website_logo) }}" alt="" style="max-height: 70px;">
        @else
            Logo
        @endif
    </a>
    <div class="md:block hidden">
        <nav class="flex md:flex-row flex-col items-center md:space-y-2 space-y-4 md:space-x-12 text-white">
            <a href="{{ route('website.homepage') . '#about' }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('About us') }}</p>
            </a>
            <a href="{{ route('website.homepage') . '#projects' }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('Our cases') }}</p>
            </a>
            <a href="{{ route('website.news') }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('News') }}</p>
            </a>
            <a href="{{ route('website.homepage') . '#contact' }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('Contact') }}</p>
            </a>
        </nav>
    </div>

    <button class="w-[170px] md:block hidden rounded-[12px] text-white h-[60px] button_secondaryBtn__YDSCW">
        <div>{{ __('Get Started') }}</div>
    </button>

    <div class="relative md:block hidden">
        <button id="languageSwitcher" class="text-white focus:outline-none">
            {{ strtoupper(app()->getLocale()) }}
        </button>
        <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
            @foreach (config('app.languages') as $lang => $language)
                @if (app()->getLocale() != $lang)
                    <a href="{{ route('website.lang.switch', $lang) }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        {{ $language }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>

    <button id="mobileMenuButton"
        class="z-50 md:hidden flex flex-col items-center justify-center border rounded-[8px] border-white bg-transparent w-10 h-10 space-y-1">
        <div class="w-5 h-[1px] bg-white"></div>
        <div class="w-5 h-[1px] bg-white"></div>
        <div class="w-5 h-[1px] bg-white"></div>
    </button>
</header>

<div id="mobileMenu" class="w-screen h-screen bg-background fixed top-0 left-0 flex flex-col items-center z-40 hidden">
    <div class="pt-[35%]">
        <nav class="flex md:flex-row flex-col items-center md:space-y-2 space-y-4 md:space-x-12 text-white">
            <a href="{{ route('website.homepage') . '#about' }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('About us') }}</p>
            </a>
            <a href="{{ route('website.homepage') . '#projects' }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('Our cases') }}</p>
            </a>
            <a href="{{ route('website.news') }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('News') }}</p>
            </a>
            <a href="{{ route('website.homepage') . '#contact' }}">
                <p class="typography_body__0hry6 undefined text-white">{{ __('Contact') }}</p>
            </a>
            <ul class="mobile-menu-lang">
                @foreach (config('app.languages') as $lang => $language)
                    <li>
                        <a href="{{ route('website.lang.switch', $lang) }}"
                            class="{{ app()->getLocale() == $lang ? 'active' : '' }}">
                            {{ strtoupper($language) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
