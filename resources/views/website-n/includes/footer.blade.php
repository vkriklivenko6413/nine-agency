<footer class="footer">
    <div class="footer__container">
        <div class="footer__body">
            <a href="{{ route('website.homepage') }}" class="footer__logo">
                @if ($websiteVariables->website_logo ?? '')
                    <img src="{{ Storage::url($websiteVariables->website_logo) }}" alt="" />
                @else
                    Logo
                @endif
            </a>
            <div class="footer__items">
                <a href="{{ route('website.homepage') . '#get_started' }}" class="footer__item">{{ __('About us') }}</a>
                <a href="{{ route('website.homepage') . '#projects' }}" class="footer__item">{{ __('Our cases') }}</a>
                <a href="{{ route('website.news') }}" class="footer__item">{{ __('News') }}</a>
                <a href="{{ route('website.homepage') . '#contact' }}" class="footer__item">{{ __('Contact') }}</a>
            </div>
            <div class="footer__companies companies-footer" data-da=".footer__container, 767.98,last">
                <div class="companies-footer__items">
                    @if ($websiteVariables->instagram_url ?? '')
                        <a href="{{ $websiteVariables->instagram_url }}" class="companies-footer__item">
                            <img src="/website-src/img/01(7).svg" alt="" />
                        </a>
                    @endif
                    @if ($websiteVariables->facebook_url ?? '')
                        <a href="{{ $websiteVariables->facebook_url }}" class="companies-footer__item">
                            <img src="/website-src/img/02(7).svg" alt="" />
                        </a>
                    @endif
                    @if ($websiteVariables->tiktok_url ?? '')
                        <a href="{{ $websiteVariables->tiktok_url }}" class="companies-footer__item">
                            <img src="/website-src/img/03(6).svg" alt="" />
                        </a>
                    @endif
                    @if ($websiteVariables->youtube_url ?? '')
                        <a href="{{ $websiteVariables->youtube_url }}" class="companies-footer__item">
                            <img src="/website-src/img/04(5).svg" alt="" />
                        </a>
                    @endif
                </div>
            </div>
        </div>
        {{-- <div class="footer__contact contact-footer">
            <div class="contact-footer__title">
                Get the freshest news from us
            </div>
            <form action="https://6676ba45ff107b7cb93e50ce--sparkly-licorice-24b8a0.netlify.app/home" method="">
                <div class="contact-footer__item">
                    <input data-required="" type="text" name="form[email]" placeholder="Your email address…"
                        class="input" />
                    <button type="submit" class="contact-footer__button button">
                        Subscribe
                    </button>
                </div>
            </form>
        </div> --}}
    </div>
    <div class="footer__sub sub-footer">
        <div class="sub-footer__container">
            <div class="sub-footer__items">
                <a href="https://6676ba45ff107b7cb93e50ce--sparkly-licorice-24b8a0.netlify.app/home#"
                    class="sub-footer__item">{{ __('Terms & Conditions') }}
                </a>
                <a href="https://6676ba45ff107b7cb93e50ce--sparkly-licorice-24b8a0.netlify.app/home#"
                    class="sub-footer__item">{{ __('Privacy Policy') }}
                </a>
                <a href="https://6676ba45ff107b7cb93e50ce--sparkly-licorice-24b8a0.netlify.app/home#"
                    class="sub-footer__item">
                    {{ __('Accessibility') }}
                </a>
                <a href="https://6676ba45ff107b7cb93e50ce--sparkly-licorice-24b8a0.netlify.app/home#"
                    class="sub-footer__item">
                    {{ __('Legal') }}
                </a>
            </div>
        </div>
    </div>
</footer>
