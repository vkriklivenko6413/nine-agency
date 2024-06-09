@extends('website.layouts.app')

@section('title', __('Home'))

@section('content')
    <section class="w-full flex flex-col items-center">
        <div class="w-full flex justify-center md:py-40 py-10 m-container relative h-screen">
            <img src="{{ asset('website/ellipse.png') }}" alt="hero image" class="md:absolute -top-[100px] hidden" />
            <div class="flex flex-col items-center w-full justify-center">
                <h1 class="typography_superH1__bLiEu text-center text-white">
                    {{ $homepageVariables->{'intro_title_' . app()->getLocale()} ?? '' }}</h1>
                <div class="overflow-hidden relative w-full">
                    <div class="w-full text-center overflow-hidden md:min-h-[180px]">
                        <div style="opacity: 1">
                            <h1 class="typography_superH1__bLiEu undefined text-red">{{ __('Social Media') }}</h1>
                        </div>
                    </div>
                </div>
                <p class="typography_body__0hry6 text-center mt-6 md:max-w-[520px] max-w-[303px] text-white">
                    {{ $homepageVariables->{'intro_text_' . app()->getLocale()} ?? '' }}
                </p>
                <a href="{{ $homepageVariables->meeting_url ?? '' }}">
                    <button
                        class="md:mt-16 mt-8 w-[330px] md:w-[170px] h-[56px] rounded-[12px] text-white h-[60px] button_primaryBtn__jr20_">
                        <div class="h-[56px] flex items-center justify-center">{{ __('Book A Meeting') }}</div>
                    </button>
                </a>
                <div class="flex items-center space-x-4 md:space-x-10 md:pt-28 pt-12 md:pb-12 md:mb-6 mb-12">
                    <div class="h-0.5 md:w-[50px] w-[28px] bg-red"></div>
                    <p class="typography_p2__n_IL0 undefined text-white">{{ __('TRUSTED BY AMAZING BRANDS') }}</p>
                    <div class="h-0.5 md:w-[50px] w-[28px] bg-red"></div>
                </div>

                <div class="border border-white rounded-[16px] p-2 md:p-4 w-[328px] md:w-[946px] md:h-[157px] h-[60px]">
                    <div class="overflow-hidden w-[310px] md:w-[910px]">
                        <div class="flex HeroBlock_animateMarquee__2S0WO">
                            @foreach ($clients as $client)
                                <img src="{{ Storage::url($client->logo) }}"
                                    class="md:h-[120px] h-[44px] md:w-[264px] w-[150px] object-cover" />
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex items-start md:items-center flex-col w-full md:py-40 py-20 m-container undefined" id="projects">
            <div class="flex items-start md:items-center flex-col">
                <h1 class="typography_h1__H_Hf_ md:text-center md:max-w-[800px] max-w-[330px] md:mb-6 mb-3 text-white">
                    {{ $homepageVariables->{'projects_section_title_' . app()->getLocale()} ?? '' }}
                </h1>
                <p class="typography_body__0hry6 md:text-center md:max-w-[500px] w-full pb-10 text-white">
                    {{ $homepageVariables->{'projects_section_text_' . app()->getLocale()} ?? '' }}
                </p>
            </div>
            <div class="w-full flex flex-col items-start md:items-center justify-center">
                <div class="md:flex flex-col items-center w-[1170px] hidden">
                    @foreach ($projects as $index => $project)
                        @if ($index % 3 == 0)
                            <!-- Single project block -->
                            <div class="flex flex-col mb-6">
                                <a class="flex flex-col items-center relative group overflow-hidden rounded-[16px]"
                                    href="{{ route('website.project', $project->id) }}">
                                    <img src="{{ $project->getFirstMediaUrl('images') }}" alt="{{ $project->name }}"
                                        class="w-full rounded-[16px]" />
                                    <div
                                        class="flex flex-col space-y-3 absolute bg-black opacity-0 w-full bottom-0 p-6 transition-all duration-500 transform translate-y-full group-hover:opacity-80 group-hover:translate-y-0 rounded-[16px]">
                                        <p class="typography_p1__0Ljmd undefined text-white">{{ $project->name }}</p>
                                        <p class="typography_body__0hry6 w-3/5 text-white">
                                            {{ substr($project->description, 0, 50) }}...
                                        </p>
                                        <p class="typography_body__0hry6 underline text-white">{{ __('See more') }}</p>
                                    </div>
                                </a>
                            </div>
                        @elseif($index % 3 == 1)
                            <!-- Double project block start -->
                            <div class="flex space-x-6 mt-6">
                                <a class="flex flex-col items-center relative group overflow-hidden rounded-[16px]"
                                    href="{{ route('website.project', $project->id) }}">
                                    <img src="{{ $project->getFirstMediaUrl('images') }}" alt="{{ $project->name }}"
                                        class="w-full rounded-[16px]" />
                                    <div
                                        class="flex flex-col space-y-3 absolute bg-black opacity-0 w-full bottom-0 p-6 transition-all duration-500 transform translate-y-full group-hover:opacity-80 group-hover:translate-y-0 rounded-[16px]">
                                        <p class="typography_p1__0Ljmd undefined text-white">{{ $project->name }}</p>
                                        <p class="typography_body__0hry6 w-3/5 text-white">
                                            {{ substr($project->description, 0, 50) }}...
                                        </p>
                                        <p class="typography_body__0hry6 underline text-white">{{ __('See more') }}</p>
                                    </div>
                                </a>
                            @else
                                <!-- Second project in double block -->
                                <a class="flex flex-col items-center relative group overflow-hidden rounded-[16px]"
                                    href="{{ route('website.project', $project->id) }}">
                                    <img src="{{ $project->getFirstMediaUrl('images') }}" alt="{{ $project->name }}"
                                        class="w-full rounded-[16px]" />
                                    <div
                                        class="flex flex-col space-y-3 absolute bg-black opacity-0 w-full bottom-0 p-6 transition-all duration-500 transform translate-y-full group-hover:opacity-80 group-hover:translate-y-0 rounded-[16px]">
                                        <p class="typography_p1__0Ljmd undefined text-white">{{ $project->name }}</p>
                                        <p class="typography_body__0hry6 w-3/5 text-white">
                                            {{ substr($project->description, 0, 50) }}...
                                        </p>
                                        <p class="typography_body__0hry6 underline text-white">{{ __('See more') }}</p>
                                    </div>
                                </a>
                            </div> <!-- End of double project block -->
                        @endif
                    @endforeach
                </div>

                <div class="md:hidden flex-col items-center w-full flex">
                    @foreach ($projects as $index => $project)
                        <div class="flex flex-col mb-6">
                            <a class="flex flex-col items-center relative group overflow-hidden rounded-[16px]"
                                href="{{ route('website.project', $project->id) }}">
                                <img src="{{ $project->getFirstMediaUrl('images') }}" alt="{{ $project->name }}"
                                    class="w-full rounded-[16px]" />
                                <div
                                    class="flex flex-col space-y-3 absolute bg-black opacity-0 w-full bottom-0 p-6 transition-all duration-500 transform translate-y-full group-hover:opacity-80 group-hover:translate-y-0 rounded-[16px]">
                                    <p class="typography_p1__0Ljmd undefined text-white">{{ $project->name }}</p>
                                    <p class="typography_body__0hry6 w-3/5 text-white">
                                        {{ substr($project->description, 0, 50) }}...
                                    </p>
                                    <p class="typography_body__0hry6 underline text-white">{{ __('See more') }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                {{-- <button
                    class="mt-10 w-full md:w-[1150px] hidden rounded-[12px] text-white h-[60px] button_outlineBtn__3xUPv">
                    <div class="w-full md:w-[1150px]">See all projects</div>
                </button> --}}
            </div>

        </div>
        <div class="flex md:flex-row flex-col items-start justify-between w-full py-40">
            <div class="min-w-[558px]">
                <h1 class="typography_h1__H_Hf_ text-start w-[370px] md:max-w-[558px] mb-3 text-white">
                    {{ $homepageVariables->{'seo_section_title_' . app()->getLocale()} ?? '' }}
                </h1>
                <p class="typography_body__0hry6 text-start max-w-[440px] md:block hidden text-white">
                    {{ $homepageVariables->{'seo_section_text_' . app()->getLocale()} ?? '' }}
                </p>
            </div>
            <div class="md:flex flex-col -ml-[300px] hidden">
                <div class="flex ml-[280px]">
                    <div
                        class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px] bg-gray">
                        <div class="mr-6">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="17.5" stroke="#FDFFFF">
                                </rect>
                                <path
                                    d="M19.003 28C17.759 28 16.589 27.764 15.493 27.292C14.3977 26.8193 13.4447 26.178 12.634 25.368C11.8233 24.558 11.1817 23.606 10.709 22.512C10.2363 21.418 10 20.2483 10 19.003C10 17.7577 10.2363 16.5877 10.709 15.493C11.181 14.3977 11.8213 13.4447 12.63 12.634C13.4387 11.8233 14.391 11.1817 15.487 10.709C16.583 10.2363 17.753 10 18.997 10C20.241 10 21.411 10.2363 22.507 10.709C23.6023 11.181 24.5553 11.8217 25.366 12.631C26.1767 13.4403 26.8183 14.3927 27.291 15.488C27.7637 16.5833 28 17.753 28 18.997C28 20.241 27.764 21.411 27.292 22.507C26.82 23.603 26.1787 24.556 25.368 25.366C24.5573 26.176 23.6053 26.8177 22.512 27.291C21.4187 27.7643 20.249 28.0007 19.003 28ZM19 27C21.2333 27 23.125 26.225 24.675 24.675C26.225 23.125 27 21.2333 27 19C27 16.7667 26.225 14.875 24.675 13.325C23.125 11.775 21.2333 11 19 11C16.7667 11 14.875 11.775 13.325 13.325C11.775 14.875 11 16.7667 11 19C11 21.2333 11.775 23.125 13.325 24.675C14.875 26.225 16.7667 27 19 27ZM19.005 24C17.617 24 16.436 23.5143 15.462 22.543C14.488 21.5717 14.0007 20.3923 14 19.005C13.9993 17.6177 14.485 16.436 15.457 15.46C16.429 14.484 17.6083 13.9973 18.995 14C20.3817 14.0027 21.563 14.4883 22.539 15.457C23.515 16.4257 24.002 17.605 24 18.995C23.998 20.385 23.5123 21.5663 22.543 22.539C21.5737 23.5117 20.3943 23.9987 19.005 24ZM19 23C20.1 23 21.0417 22.6083 21.825 21.825C22.6083 21.0417 23 20.1 23 19C23 17.9 22.6083 16.9583 21.825 16.175C21.0417 15.3917 20.1 15 19 15C17.9 15 16.9583 15.3917 16.175 16.175C15.3917 16.9583 15 17.9 15 19C15 20.1 15.3917 21.0417 16.175 21.825C16.9583 22.6083 17.9 23 19 23ZM19 20C18.732 20 18.4983 19.9003 18.299 19.701C18.0997 19.5017 18 19.268 18 19C18 18.732 18.0997 18.4983 18.299 18.299C18.4983 18.0997 18.732 18 19 18C19.268 18 19.5017 18.0997 19.701 18.299C19.9003 18.4983 20 18.732 20 19C20 19.268 19.9003 19.5017 19.701 19.701C19.5017 19.9003 19.268 20 19 20Z"
                                    fill="#FDFFFF"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="typography_p1__0Ljmd mb-2 text-white">
                                {{ $homepageVariables->{'seo_block1_title_' . app()->getLocale()} ?? '' }}</p>
                            <p class="typography_body__0hry6 w-[228px] text-white">
                                {{ $homepageVariables->{'seo_block1_text_' . app()->getLocale()} ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px]">
                        <div class="mr-6">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" stroke="#FDFFFF">
                                </rect>
                                <path
                                    d="M15.9457 24.8235C15.4521 24.8235 15.0404 24.6605 14.7104 24.3344C14.3804 24.0082 14.215 23.6013 14.2143 23.1135V11.71C14.2143 11.2229 14.3796 10.816 14.7104 10.4892C15.0411 10.1624 15.4529 9.9993 15.9457 10H24.2696C24.7625 10 25.1743 10.1631 25.505 10.4892C25.8357 10.8153 26.0007 11.2222 26 11.71V23.1135C26 23.6006 25.835 24.0072 25.505 24.3333C25.175 24.6594 24.7629 24.8228 24.2686 24.8235H15.9457ZM15.9457 23.7647H24.2696C24.4339 23.7647 24.585 23.6969 24.7229 23.5614C24.8607 23.4259 24.9293 23.2766 24.9286 23.1135V11.71C24.9286 11.5476 24.86 11.3984 24.7229 11.2621C24.5857 11.1259 24.4343 11.0581 24.2686 11.0588H15.9457C15.7807 11.0588 15.6293 11.1266 15.4914 11.2621C15.3536 11.3976 15.285 11.5469 15.2857 11.71V23.1135C15.2857 23.2759 15.3543 23.4252 15.4914 23.5614C15.6286 23.6976 15.7796 23.7654 15.9446 23.7647M12.7304 28C12.2375 28 11.8257 27.8369 11.495 27.5108C11.1643 27.1847 10.9993 26.7778 11 26.29V13.8276H12.0714V26.29C12.0714 26.4524 12.14 26.6016 12.2771 26.7379C12.4143 26.8741 12.5654 26.9419 12.7304 26.9412H22.1268V28H12.7304Z"
                                    fill="#FDFFFF"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="typography_p1__0Ljmd mb-2 text-white">
                                {{ $homepageVariables->{'seo_block2_title_' . app()->getLocale()} ?? '' }}</p>
                            <p class="typography_body__0hry6 w-[228px] text-white">
                                {{ $homepageVariables->{'seo_block2_text_' . app()->getLocale()} ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div
                        class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px] bg-gray">
                        <div class="mr-6">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" stroke="#FDFFFF">
                                </rect>
                                <path
                                    d="M13.4496 18.1988L11.3812 17.0174C11.2667 16.9545 11.1746 16.8633 11.1047 16.7437C11.0349 16.623 11 16.4931 11 16.354V13.9922C11 13.8538 11.0349 13.7245 11.1047 13.6044C11.1746 13.4842 11.2667 13.393 11.3812 13.3307L13.4496 12.1484C13.5628 12.0823 13.689 12.0493 13.828 12.0493C13.9664 12.0493 14.0944 12.0823 14.212 12.1484L16.2804 13.3307C16.3949 13.3936 16.4871 13.4852 16.5569 13.6053C16.6267 13.7255 16.6616 13.8544 16.6616 13.9922V16.355C16.6616 16.4934 16.6267 16.6227 16.5569 16.7428C16.4871 16.863 16.3949 16.9545 16.2804 17.0174L14.212 18.1988C14.0988 18.2655 13.9727 18.2988 13.8337 18.2988C13.6953 18.2988 13.5672 18.2655 13.4496 18.1988ZM13.8308 17.3222L15.718 16.2484V14.0998L13.8308 13.025L11.9436 14.0998V16.2484L13.8308 17.3222ZM23.5217 18.4819V17.3948L25.3353 18.4602C25.5769 18.5986 25.7643 18.7841 25.8977 19.0169C26.031 19.2497 26.0977 19.4978 26.0977 19.7614V24.0869C26.0977 24.3511 26.031 24.5996 25.8977 24.8324C25.7643 25.0651 25.5769 25.2504 25.3353 25.3881L21.6703 27.5282C21.4281 27.6648 21.173 27.733 20.9051 27.733C20.6371 27.733 20.3839 27.6648 20.1454 27.5282L16.4805 25.3881C16.2389 25.2497 16.0514 25.0642 15.9181 24.8314C15.7847 24.5999 15.718 24.3521 15.718 24.0878V19.7623C15.718 19.4981 15.7847 19.2497 15.9181 19.0169C16.0514 18.7841 16.2389 18.5986 16.4805 18.4602L18.295 17.3958V18.4828L16.6616 19.4349V24.4162L20.9079 26.879L25.1541 24.4162V19.434L23.5217 18.4819ZM21.3797 15.718V20.9079C21.3797 21.0419 21.3344 21.1539 21.2438 21.2438C21.1532 21.3338 21.0409 21.3791 20.9069 21.3797C20.7729 21.3803 20.661 21.335 20.571 21.2438C20.4811 21.1526 20.4361 21.0406 20.4361 20.9079V11.7624C20.4361 11.5467 20.5091 11.3655 20.655 11.2189C20.8009 11.0723 20.9821 10.9994 21.1985 11H26.561C26.8598 11 27.0838 11.1349 27.2329 11.4048C27.3826 11.6747 27.3713 11.9367 27.1989 12.1908L26.7054 12.9306C26.6199 13.0596 26.5771 13.2011 26.5771 13.3552C26.5771 13.5094 26.6199 13.6534 26.7054 13.7874L27.1989 14.5282C27.3707 14.7817 27.382 15.0434 27.2329 15.3132C27.0838 15.5831 26.8598 15.718 26.561 15.718H21.3797Z"
                                    fill="#FDFFFF"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="typography_p1__0Ljmd mb-2 text-white">
                                {{ $homepageVariables->{'seo_block3_title_' . app()->getLocale()} ?? '' }}</p>
                            <p class="typography_body__0hry6 w-[228px] text-white">
                                {{ $homepageVariables->{'seo_block3_text_' . app()->getLocale()} ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px]">
                        <div class="mr-6">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" stroke="#FDFFFF">
                                </rect>
                                <path
                                    d="M19 14.8333C18.558 14.8333 18.134 14.6577 17.8215 14.3452C17.5089 14.0326 17.3333 13.6087 17.3333 13.1667C17.3333 12.7246 17.5089 12.3007 17.8215 11.9882C18.134 11.6756 18.558 11.5 19 11.5C19.442 11.5 19.866 11.6756 20.1785 11.9882C20.4911 12.3007 20.6667 12.7246 20.6667 13.1667C20.6667 13.6087 20.4911 14.0326 20.1785 14.3452C19.866 14.6577 19.442 14.8333 19 14.8333ZM19 14.8333V18.1667M19 18.1667C19.663 18.1667 20.2989 18.4301 20.7678 18.8989C21.2366 19.3677 21.5 20.0036 21.5 20.6667C21.5 21.3297 21.2366 21.9656 20.7678 22.4344C20.2989 22.9033 19.663 23.1667 19 23.1667C18.337 23.1667 17.7011 22.9033 17.2322 22.4344C16.7634 21.9656 16.5 21.3297 16.5 20.6667C16.5 20.0036 16.7634 19.3677 17.2322 18.8989C17.7011 18.4301 18.337 18.1667 19 18.1667ZM14.5833 23.8333L16.9167 22.1667M23.4167 23.8333L21.0833 22.1667M11.5 24.8333C11.5 25.2754 11.6756 25.6993 11.9882 26.0118C12.3007 26.3244 12.7246 26.5 13.1667 26.5C13.6087 26.5 14.0326 26.3244 14.3452 26.0118C14.6577 25.6993 14.8333 25.2754 14.8333 24.8333C14.8333 24.3913 14.6577 23.9674 14.3452 23.6548C14.0326 23.3423 13.6087 23.1667 13.1667 23.1667C12.7246 23.1667 12.3007 23.3423 11.9882 23.6548C11.6756 23.9674 11.5 24.3913 11.5 24.8333ZM23.1667 24.8333C23.1667 25.2754 23.3423 25.6993 23.6548 26.0118C23.9674 26.3244 24.3913 26.5 24.8333 26.5C25.2754 26.5 25.6993 26.3244 26.0118 26.0118C26.3244 25.6993 26.5 25.2754 26.5 24.8333C26.5 24.3913 26.3244 23.9674 26.0118 23.6548C25.6993 23.3423 25.2754 23.1667 24.8333 23.1667C24.3913 23.1667 23.9674 23.3423 23.6548 23.6548C23.3423 23.9674 23.1667 24.3913 23.1667 24.8333Z"
                                    stroke="#FDFFFF" stroke-width="0.833333" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="typography_p1__0Ljmd mb-2 text-white">
                                {{ $homepageVariables->{'seo_block4_title_' . app()->getLocale()} ?? '' }}</p>
                            <p class="typography_body__0hry6 w-[228px] text-white">
                                {{ $homepageVariables->{'seo_block4_text_' . app()->getLocale()} ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px] bg-gray">
                        <div class="mr-6">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" stroke="#FDFFFF">
                                </rect>
                                <path
                                    d="M28.5 25.5516C28.5 25.6385 28.4655 25.7218 28.4041 25.7833C28.3426 25.8447 28.2593 25.8792 28.1724 25.8792H9.82759C9.7407 25.8792 9.65738 25.8447 9.59595 25.7833C9.53451 25.7218 9.5 25.6385 9.5 25.5516C9.5 25.4648 9.53451 25.3814 9.59595 25.32C9.65738 25.2586 9.7407 25.2241 9.82759 25.2241H10.8103V17.0344C10.8103 16.7738 10.9139 16.5238 11.0982 16.3395C11.2825 16.1552 11.5325 16.0516 11.7931 16.0516H15.3966V13.1034C15.3966 12.8427 15.5001 12.5928 15.6844 12.4084C15.8687 12.2241 16.1187 12.1206 16.3793 12.1206H21.6207C21.8813 12.1206 22.1313 12.2241 22.3156 12.4084C22.4999 12.5928 22.6034 12.8427 22.6034 13.1034V19.3275H26.2069C26.4675 19.3275 26.7175 19.431 26.9018 19.6153C27.0861 19.7996 27.1897 20.0496 27.1897 20.3103V25.2241H28.1724C28.2593 25.2241 28.3426 25.2586 28.4041 25.32C28.4655 25.3814 28.5 25.4648 28.5 25.5516ZM22.6034 19.9827V25.2241H26.5345V20.3103C26.5345 20.2234 26.5 20.1401 26.4385 20.0786C26.3771 20.0172 26.2938 19.9827 26.2069 19.9827H22.6034ZM16.0517 25.2241H21.9483V13.1034C21.9483 13.0165 21.9138 12.9332 21.8523 12.8717C21.7909 12.8103 21.7076 12.7758 21.6207 12.7758H16.3793C16.2924 12.7758 16.2091 12.8103 16.1477 12.8717C16.0862 12.9332 16.0517 13.0165 16.0517 13.1034V25.2241ZM11.4655 25.2241H15.3966V16.7068H11.7931C11.7062 16.7068 11.6229 16.7413 11.5615 16.8028C11.5 16.8642 11.4655 16.9475 11.4655 17.0344V25.2241Z"
                                    fill="#FDFFFF"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="typography_p1__0Ljmd mb-2 text-white">
                                {{ $homepageVariables->{'seo_block5_title_' . app()->getLocale()} ?? '' }}</p>
                            <p class="typography_body__0hry6 w-[228px] text-white">
                                {{ $homepageVariables->{'seo_block5_text_' . app()->getLocale()} ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:hidden">
                <div class="swiper w-[400px] mt-10">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px] bg-gray">
                                <div class="mr-6">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="37" height="37" rx="17.5"
                                            stroke="#FDFFFF"></rect>
                                        <path
                                            d="M19.003 28C17.759 28 16.589 27.764 15.493 27.292C14.3977 26.8193 13.4447 26.178 12.634 25.368C11.8233 24.558 11.1817 23.606 10.709 22.512C10.2363 21.418 10 20.2483 10 19.003C10 17.7577 10.2363 16.5877 10.709 15.493C11.181 14.3977 11.8213 13.4447 12.63 12.634C13.4387 11.8233 14.391 11.1817 15.487 10.709C16.583 10.2363 17.753 10 18.997 10C20.241 10 21.411 10.2363 22.507 10.709C23.6023 11.181 24.5553 11.8217 25.366 12.631C26.1767 13.4403 26.8183 14.3927 27.291 15.488C27.7637 16.5833 28 17.753 28 18.997C28 20.241 27.764 21.411 27.292 22.507C26.82 23.603 26.1787 24.556 25.368 25.366C24.5573 26.176 23.6053 26.8177 22.512 27.291C21.4187 27.7643 20.249 28.0007 19.003 28ZM19 27C21.2333 27 23.125 26.225 24.675 24.675C26.225 23.125 27 21.2333 27 19C27 16.7667 26.225 14.875 24.675 13.325C23.125 11.775 21.2333 11 19 11C16.7667 11 14.875 11.775 13.325 13.325C11.775 14.875 11 16.7667 11 19C11 21.2333 11.775 23.125 13.325 24.675C14.875 26.225 16.7667 27 19 27ZM19.005 24C17.617 24 16.436 23.5143 15.462 22.543C14.488 21.5717 14.0007 20.3923 14 19.005C13.9993 17.6177 14.485 16.436 15.457 15.46C16.429 14.484 17.6083 13.9973 18.995 14C20.3817 14.0027 21.563 14.4883 22.539 15.457C23.515 16.4257 24.002 17.605 24 18.995C23.998 20.385 23.5123 21.5663 22.543 22.539C21.5737 23.5117 20.3943 23.9987 19.005 24ZM19 23C20.1 23 21.0417 22.6083 21.825 21.825C22.6083 21.0417 23 20.1 23 19C23 17.9 22.6083 16.9583 21.825 16.175C21.0417 15.3917 20.1 15 19 15C17.9 15 16.9583 15.3917 16.175 16.175C15.3917 16.9583 15 17.9 15 19C15 20.1 15.3917 21.0417 16.175 21.825C16.9583 22.6083 17.9 23 19 23ZM19 20C18.732 20 18.4983 19.9003 18.299 19.701C18.0997 19.5017 18 19.268 18 19C18 18.732 18.0997 18.4983 18.299 18.299C18.4983 18.0997 18.732 18 19 18C19.268 18 19.5017 18.0997 19.701 18.299C19.9003 18.4983 20 18.732 20 19C20 19.268 19.9003 19.5017 19.701 19.701C19.5017 19.9003 19.268 20 19 20Z"
                                            fill="#FDFFFF"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="typography_p1__0Ljmd mb-2 text-white">
                                        {{ $homepageVariables->{'seo_block1_title_' . app()->getLocale()} ?? '' }}
                                    </p>
                                    <p class="typography_body__0hry6 w-[228px] text-white">
                                        {{ $homepageVariables->{'seo_block1_text_' . app()->getLocale()} ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px]">
                                <div class="mr-6">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="37" height="37" rx="18.5"
                                            stroke="#FDFFFF"></rect>
                                        <path
                                            d="M15.9457 24.8235C15.4521 24.8235 15.0404 24.6605 14.7104 24.3344C14.3804 24.0082 14.215 23.6013 14.2143 23.1135V11.71C14.2143 11.2229 14.3796 10.816 14.7104 10.4892C15.0411 10.1624 15.4529 9.9993 15.9457 10H24.2696C24.7625 10 25.1743 10.1631 25.505 10.4892C25.8357 10.8153 26.0007 11.2222 26 11.71V23.1135C26 23.6006 25.835 24.0072 25.505 24.3333C25.175 24.6594 24.7629 24.8228 24.2686 24.8235H15.9457ZM15.9457 23.7647H24.2696C24.4339 23.7647 24.585 23.6969 24.7229 23.5614C24.8607 23.4259 24.9293 23.2766 24.9286 23.1135V11.71C24.9286 11.5476 24.86 11.3984 24.7229 11.2621C24.5857 11.1259 24.4343 11.0581 24.2686 11.0588H15.9457C15.7807 11.0588 15.6293 11.1266 15.4914 11.2621C15.3536 11.3976 15.285 11.5469 15.2857 11.71V23.1135C15.2857 23.2759 15.3543 23.4252 15.4914 23.5614C15.6286 23.6976 15.7796 23.7654 15.9446 23.7647M12.7304 28C12.2375 28 11.8257 27.8369 11.495 27.5108C11.1643 27.1847 10.9993 26.7778 11 26.29V13.8276H12.0714V26.29C12.0714 26.4524 12.14 26.6016 12.2771 26.7379C12.4143 26.8741 12.5654 26.9419 12.7304 26.9412H22.1268V28H12.7304Z"
                                            fill="#FDFFFF"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="typography_p1__0Ljmd mb-2 text-white">
                                        {{ $homepageVariables->{'seo_block2_title_' . app()->getLocale()} ?? '' }}</p>
                                    <p class="typography_body__0hry6 w-[228px] text-white">
                                        {{ $homepageVariables->{'seo_block2_text_' . app()->getLocale()} ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px] bg-gray">
                                <div class="mr-6">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="37" height="37" rx="18.5"
                                            stroke="#FDFFFF"></rect>
                                        <path
                                            d="M13.4496 18.1988L11.3812 17.0174C11.2667 16.9545 11.1746 16.8633 11.1047 16.7437C11.0349 16.623 11 16.4931 11 16.354V13.9922C11 13.8538 11.0349 13.7245 11.1047 13.6044C11.1746 13.4842 11.2667 13.393 11.3812 13.3307L13.4496 12.1484C13.5628 12.0823 13.689 12.0493 13.828 12.0493C13.9664 12.0493 14.0944 12.0823 14.212 12.1484L16.2804 13.3307C16.3949 13.3936 16.4871 13.4852 16.5569 13.6053C16.6267 13.7255 16.6616 13.8544 16.6616 13.9922V16.355C16.6616 16.4934 16.6267 16.6227 16.5569 16.7428C16.4871 16.863 16.3949 16.9545 16.2804 17.0174L14.212 18.1988C14.0988 18.2655 13.9727 18.2988 13.8337 18.2988C13.6953 18.2988 13.5672 18.2655 13.4496 18.1988ZM13.8308 17.3222L15.718 16.2484V14.0998L13.8308 13.025L11.9436 14.0998V16.2484L13.8308 17.3222ZM23.5217 18.4819V17.3948L25.3353 18.4602C25.5769 18.5986 25.7643 18.7841 25.8977 19.0169C26.031 19.2497 26.0977 19.4978 26.0977 19.7614V24.0869C26.0977 24.3511 26.031 24.5996 25.8977 24.8324C25.7643 25.0651 25.5769 25.2504 25.3353 25.3881L21.6703 27.5282C21.4281 27.6648 21.173 27.733 20.9051 27.733C20.6371 27.733 20.3839 27.6648 20.1454 27.5282L16.4805 25.3881C16.2389 25.2497 16.0514 25.0642 15.9181 24.8314C15.7847 24.5999 15.718 24.3521 15.718 24.0878V19.7623C15.718 19.4981 15.7847 19.2497 15.9181 19.0169C16.0514 18.7841 16.2389 18.5986 16.4805 18.4602L18.295 17.3958V18.4828L16.6616 19.4349V24.4162L20.9079 26.879L25.1541 24.4162V19.434L23.5217 18.4819ZM21.3797 15.718V20.9079C21.3797 21.0419 21.3344 21.1539 21.2438 21.2438C21.1532 21.3338 21.0409 21.3791 20.9069 21.3797C20.7729 21.3803 20.661 21.335 20.571 21.2438C20.4811 21.1526 20.4361 21.0406 20.4361 20.9079V11.7624C20.4361 11.5467 20.5091 11.3655 20.655 11.2189C20.8009 11.0723 20.9821 10.9994 21.1985 11H26.561C26.8598 11 27.0838 11.1349 27.2329 11.4048C27.3826 11.6747 27.3713 11.9367 27.1989 12.1908L26.7054 12.9306C26.6199 13.0596 26.5771 13.2011 26.5771 13.3552C26.5771 13.5094 26.6199 13.6534 26.7054 13.7874L27.1989 14.5282C27.3707 14.7817 27.382 15.0434 27.2329 15.3132C27.0838 15.5831 26.8598 15.718 26.561 15.718H21.3797Z"
                                            fill="#FDFFFF"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="typography_p1__0Ljmd mb-2 text-white">
                                        {{ $homepageVariables->{'seo_block3_title_' . app()->getLocale()} ?? '' }}</p>
                                    <p class="typography_body__0hry6 w-[228px] text-white">
                                        {{ $homepageVariables->{'seo_block3_text_' . app()->getLocale()} ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px]">
                                <div class="mr-6">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="37" height="37" rx="18.5"
                                            stroke="#FDFFFF"></rect>
                                        <path
                                            d="M19 14.8333C18.558 14.8333 18.134 14.6577 17.8215 14.3452C17.5089 14.0326 17.3333 13.6087 17.3333 13.1667C17.3333 12.7246 17.5089 12.3007 17.8215 11.9882C18.134 11.6756 18.558 11.5 19 11.5C19.442 11.5 19.866 11.6756 20.1785 11.9882C20.4911 12.3007 20.6667 12.7246 20.6667 13.1667C20.6667 13.6087 20.4911 14.0326 20.1785 14.3452C19.866 14.6577 19.442 14.8333 19 14.8333ZM19 14.8333V18.1667M19 18.1667C19.663 18.1667 20.2989 18.4301 20.7678 18.8989C21.2366 19.3677 21.5 20.0036 21.5 20.6667C21.5 21.3297 21.2366 21.9656 20.7678 22.4344C20.2989 22.9033 19.663 23.1667 19 23.1667C18.337 23.1667 17.7011 22.9033 17.2322 22.4344C16.7634 21.9656 16.5 21.3297 16.5 20.6667C16.5 20.0036 16.7634 19.3677 17.2322 18.8989C17.7011 18.4301 18.337 18.1667 19 18.1667ZM14.5833 23.8333L16.9167 22.1667M23.4167 23.8333L21.0833 22.1667M11.5 24.8333C11.5 25.2754 11.6756 25.6993 11.9882 26.0118C12.3007 26.3244 12.7246 26.5 13.1667 26.5C13.6087 26.5 14.0326 26.3244 14.3452 26.0118C14.6577 25.6993 14.8333 25.2754 14.8333 24.8333C14.8333 24.3913 14.6577 23.9674 14.3452 23.6548C14.0326 23.3423 13.6087 23.1667 13.1667 23.1667C12.7246 23.1667 12.3007 23.3423 11.9882 23.6548C11.6756 23.9674 11.5 24.3913 11.5 24.8333ZM23.1667 24.8333C23.1667 25.2754 23.3423 25.6993 23.6548 26.0118C23.9674 26.3244 24.3913 26.5 24.8333 26.5C25.2754 26.5 25.6993 26.3244 26.0118 26.0118C26.3244 25.6993 26.5 25.2754 26.5 24.8333C26.5 24.3913 26.3244 23.9674 26.0118 23.6548C25.6993 23.3423 25.2754 23.1667 24.8333 23.1667C24.3913 23.1667 23.9674 23.3423 23.6548 23.6548C23.3423 23.9674 23.1667 24.3913 23.1667 24.8333Z"
                                            stroke="#FDFFFF" stroke-width="0.833333" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="typography_p1__0Ljmd mb-2 text-white">
                                        {{ $homepageVariables->{'seo_block4_title_' . app()->getLocale()} ?? '' }}</p>
                                    <p class="typography_body__0hry6 w-[228px] text-white">
                                        {{ $homepageVariables->{'seo_block4_text_' . app()->getLocale()} ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col justify-between items-start w-full md:w-[279px] h-[291px] py-5 px-4 rounded-[16px] bg-gray">
                                <div class="mr-6">
                                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="37" height="37" rx="18.5"
                                            stroke="#FDFFFF"></rect>
                                        <path
                                            d="M28.5 25.5516C28.5 25.6385 28.4655 25.7218 28.4041 25.7833C28.3426 25.8447 28.2593 25.8792 28.1724 25.8792H9.82759C9.7407 25.8792 9.65738 25.8447 9.59595 25.7833C9.53451 25.7218 9.5 25.6385 9.5 25.5516C9.5 25.4648 9.53451 25.3814 9.59595 25.32C9.65738 25.2586 9.7407 25.2241 9.82759 25.2241H10.8103V17.0344C10.8103 16.7738 10.9139 16.5238 11.0982 16.3395C11.2825 16.1552 11.5325 16.0516 11.7931 16.0516H15.3966V13.1034C15.3966 12.8427 15.5001 12.5928 15.6844 12.4084C15.8687 12.2241 16.1187 12.1206 16.3793 12.1206H21.6207C21.8813 12.1206 22.1313 12.2241 22.3156 12.4084C22.4999 12.5928 22.6034 12.8427 22.6034 13.1034V19.3275H26.2069C26.4675 19.3275 26.7175 19.431 26.9018 19.6153C27.0861 19.7996 27.1897 20.0496 27.1897 20.3103V25.2241H28.1724C28.2593 25.2241 28.3426 25.2586 28.4041 25.32C28.4655 25.3814 28.5 25.4648 28.5 25.5516ZM22.6034 19.9827V25.2241H26.5345V20.3103C26.5345 20.2234 26.5 20.1401 26.4385 20.0786C26.3771 20.0172 26.2938 19.9827 26.2069 19.9827H22.6034ZM16.0517 25.2241H21.9483V13.1034C21.9483 13.0165 21.9138 12.9332 21.8523 12.8717C21.7909 12.8103 21.7076 12.7758 21.6207 12.7758H16.3793C16.2924 12.7758 16.2091 12.8103 16.1477 12.8717C16.0862 12.9332 16.0517 13.0165 16.0517 13.1034V25.2241ZM11.4655 25.2241H15.3966V16.7068H11.7931C11.7062 16.7068 11.6229 16.7413 11.5615 16.8028C11.5 16.8642 11.4655 16.9475 11.4655 17.0344V25.2241Z"
                                            fill="#FDFFFF"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="typography_p1__0Ljmd mb-2 text-white">
                                        {{ $homepageVariables->{'seo_block5_title_' . app()->getLocale()} ?? '' }}</p>
                                    <p class="typography_body__0hry6 w-[228px] text-white">
                                        {{ $homepageVariables->{'seo_block5_text_' . app()->getLocale()} ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-start md:items-center flex-col w-full md:py-40 py-20 m-container undefined" id="about">
            <div class="flex items-start md:items-center flex-col">
                <h1 class="typography_h1__H_Hf_ md:text-center md:max-w-[800px] max-w-[330px] md:mb-6 mb-3 text-white">
                    {{ $homepageVariables->{'marketing_section_title_' . app()->getLocale()} ?? '' }}
                </h1>
                <p class="typography_body__0hry6 md:text-center md:max-w-[500px] w-full pb-10 text-white">
                    {{ $homepageVariables->{'marketing_section_text_' . app()->getLocale()} ?? '' }}
                </p>
            </div>
            <div class="flex flex-col md:flex-row m-container justify-center">
                <div class="relative group w-full">
                    <div class="w-full h-full bg-black absolute opacity-60 group-hover:opacity-0 transition duration-300">
                    </div>
                    <img src="{{ Storage::url($homepageVariables->years_experience_img ?? '') }}" alt="experience" />
                    <div
                        class="absolute w-full justify-center flex flex-col items-start bottom-5 left-5 group-hover:opacity-0 transition duration-300">
                        <h2 class="typography_sub__jABiX mb-2 text-white">{{ $homepageVariables->years_experience ?? '' }}+
                        </h2>
                        <p class="typography_body__0hry6 undefined text-white">{{ __('years of experience') }}
                        </p>
                    </div>
                </div>
                <div class="relative group w-full">
                    <div class="w-full h-full bg-black absolute opacity-60 group-hover:opacity-0 transition duration-300">
                    </div>
                    <img src="{{ Storage::url($homepageVariables->team_members_img ?? '') }}" alt="members" />
                    <div
                        class="absolute w-full justify-center flex flex-col items-start bottom-5 left-5 group-hover:opacity-0 transition duration-300">
                        <h2 class="typography_sub__jABiX mb-2 text-white">{{ $homepageVariables->team_members ?? '' }}+
                        </h2>
                        <p class="typography_body__0hry6 undefined text-white">{{ __('team members') }}</p>
                    </div>
                </div>
                <div class="relative group w-full">
                    <div class="w-full h-full bg-black absolute opacity-60 group-hover:opacity-0 transition duration-300">
                    </div>
                    <img src="{{ Storage::url($homepageVariables->satisfied_clients_img ?? '') }}" alt="clients" />
                    <div
                        class="absolute w-full justify-center flex flex-col items-start bottom-5 left-5 group-hover:opacity-0 transition duration-300">
                        <h2 class="typography_sub__jABiX mb-2 text-white">
                            {{ $homepageVariables->satisfied_clients ?? '' }}+</h2>
                        <p class="typography_body__0hry6 undefined text-white">{{ __('satisfied clients') }}</p>
                    </div>
                </div>
                <div class="relative group w-full">
                    <div class="w-full h-full bg-black absolute opacity-60 group-hover:opacity-0 transition duration-300">
                    </div>
                    <img src="{{ Storage::url($homepageVariables->company_videos_img ?? '') }}" alt="videos" />
                    <div
                        class="absolute w-full justify-center flex flex-col items-start bottom-5 left-5 group-hover:opacity-0 transition duration-300">
                        <h2 class="typography_sub__jABiX mb-2 text-white">{{ $homepageVariables->company_videos ?? '' }}+
                        </h2>
                        <p class="typography_body__0hry6 undefined text-white">{{ __('company videos created') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-start md:items-center flex-col w-full md:py-40 py-20 m-container undefined">
            <div class="flex items-start md:items-center flex-col">
                <h1 class="typography_h1__H_Hf_ md:text-center md:max-w-[800px] max-w-[330px] md:mb-6 mb-3 text-white">
                    {{ $homepageVariables->{'videos_section_title_' . app()->getLocale()} ?? '' }}
                </h1>
                <p class="typography_body__0hry6 md:text-center md:max-w-[500px] w-full pb-10 text-white">
                    {{ $homepageVariables->{'videos_section_text_' . app()->getLocale()} ?? '' }}
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="hidden md:block">
                    <div class="swiper w-[1100px] m-auto">
                        <div class="swiper-wrapper">
                            @foreach ($videos as $key => $video)
                                <div class="swiper-slide max-h-min">
                                    <div class="rounded-[16px] relative">
                                        <video id="video-{{ $key }}" src="{{ Storage::url($video->video) }}"
                                            style="display: block;
                                                margin-left: auto;
                                                margin-right: auto;"></video>
                                        <div
                                            class="absolute z-50 top-[50%] left-[50%] transform translate-x-[-50%] translate-y-[-50%]">
                                            <svg width="73" height="73" viewBox="0 0 73 73" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="36.5" cy="36.5" r="36.5" fill="#F62424"></circle>
                                                <path
                                                    d="M49.5 35.134C50.1667 35.5189 50.1667 36.4811 49.5 36.866L30 48.1244C29.3333 48.5093 28.5 48.0281 28.5 47.2583L28.5 24.7417C28.5 23.9719 29.3333 23.4907 30 23.8756L49.5 35.134Z"
                                                    fill="white"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="md:hidden">
                    <div class="swiper md:hidden block w-full m-auto">
                        <div class="swiper-wrapper">
                            @foreach ($videos as $key => $video)
                                <div class="swiper-slide">
                                    <div class="rounded-[16px] relative">
                                        <video id="video-0-m" src="{{ Storage::url($video->video) }}"></video>
                                        <div
                                            class="absolute z-50 top-[50%] left-[50%] transform translate-x-[-50%] translate-y-[-50%]">
                                            <svg width="73" height="73" viewBox="0 0 73 73" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="36.5" cy="36.5" r="36.5" fill="#F62424"></circle>
                                                <path
                                                    d="M49.5 35.134C50.1667 35.5189 50.1667 36.4811 49.5 36.866L30 48.1244C29.3333 48.5093 28.5 48.0281 28.5 47.2583L28.5 24.7417C28.5 23.9719 29.3333 23.4907 30 23.8756L49.5 35.134Z"
                                                    fill="white"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-8 mt-6">
                    <button class="swiper-b-button-prev">
                        <svg width="73" height="73" viewBox="0 0 73 73" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="36.5" cy="36.5" r="36" transform="matrix(-1 0 0 1 73 0)"
                                stroke="#FDFFFF"></circle>
                            <path
                                d="M31.2898 36.006L39.7818 44.733C39.8517 44.8033 39.907 44.8868 39.9444 44.9786C39.9819 45.0704 40.0007 45.1688 39.9999 45.2679C39.9991 45.3671 39.9786 45.4651 39.9396 45.5563C39.9007 45.6475 39.844 45.7301 39.773 45.7992C39.7019 45.8684 39.6178 45.9228 39.5256 45.9592C39.4334 45.9957 39.3348 46.0135 39.2357 46.0116C39.1365 46.0097 39.0387 45.9882 38.9479 45.9482C38.8572 45.9083 38.7752 45.8508 38.7068 45.779L29.7068 36.529C29.5706 36.3889 29.4944 36.2013 29.4944 36.006C29.4944 35.8106 29.5706 35.623 29.7068 35.483L38.7068 26.2329C38.7752 26.1611 38.8572 26.1036 38.9479 26.0637C39.0387 26.0237 39.1365 26.0022 39.2357 26.0003C39.3348 25.9984 39.4333 26.0162 39.5256 26.0527C39.6178 26.0891 39.7019 26.1435 39.773 26.2127C39.844 26.2818 39.9007 26.3644 39.9396 26.4556C39.9786 26.5468 39.9991 26.6448 39.9999 26.744C40.0007 26.8431 39.9819 26.9415 39.9444 27.0333C39.907 27.1251 39.8517 27.2086 39.7818 27.279L31.2898 36.006Z"
                                fill="#FDFFFF"></path>
                        </svg>
                    </button>
                    <button class="swiper-b-button-next">
                        <svg width="73" height="73" viewBox="0 0 73 73" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="36.5" cy="36.5" r="36" stroke="#FDFFFF">
                            </circle>
                            <path
                                d="M41.7102 36.006L33.2182 44.733C33.1483 44.8033 33.093 44.8868 33.0556 44.9786C33.0181 45.0704 32.9993 45.1688 33.0001 45.2679C33.0009 45.3671 33.0214 45.4651 33.0604 45.5563C33.0993 45.6475 33.156 45.7301 33.227 45.7992C33.2981 45.8684 33.3822 45.9228 33.4744 45.9592C33.5666 45.9957 33.6652 46.0135 33.7643 46.0116C33.8635 46.0097 33.9613 45.9882 34.0521 45.9482C34.1428 45.9083 34.2248 45.8508 34.2932 45.779L43.2932 36.529C43.4294 36.3889 43.5056 36.2013 43.5056 36.006C43.5056 35.8106 43.4294 35.623 43.2932 35.483L34.2932 26.2329C34.2248 26.1611 34.1428 26.1036 34.0521 26.0637C33.9613 26.0237 33.8635 26.0022 33.7643 26.0003C33.6652 25.9984 33.5667 26.0162 33.4744 26.0527C33.3822 26.0891 33.2981 26.1435 33.227 26.2127C33.156 26.2818 33.0993 26.3644 33.0604 26.4556C33.0214 26.5468 33.0009 26.6448 33.0001 26.744C32.9993 26.8431 33.0181 26.9415 33.0556 27.0333C33.093 27.1251 33.1483 27.2086 33.2182 27.279L41.7102 36.006Z"
                                fill="#FDFFFF"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex items-start md:items-center flex-col w-full md:py-40 py-20 m-container undefined">
            <div class="flex items-start md:items-center flex-col">
                <h1 class="typography_h1__H_Hf_ md:text-center md:max-w-[800px] max-w-[330px] md:mb-6 mb-3 text-white">
                    {{ $homepageVariables->{'ai_section_title_' . app()->getLocale()} ?? '' }}
                </h1>
                <p class="typography_body__0hry6 md:text-center md:max-w-[500px] w-full pb-10 text-white">
                    {{ $homepageVariables->{'ai_section_text_' . app()->getLocale()} ?? '' }}
                </p>
            </div>
            <div class="">
                <div class="md:flex items-center space-x-6 justify-center hidden">
                    <img src="{{ Storage::url($homepageVariables->ai_section_img_1 ?? '') }}" alt="solution"
                        class="w-full h-[300px] object-cover" />
                    <img src="{{ Storage::url($homepageVariables->ai_section_img_2 ?? '') }}" alt="solution"
                        class="w-full h-[300px] object-cover" />
                    <img src="{{ Storage::url($homepageVariables->ai_section_img_3 ?? '') }}" alt="solution"
                        class="w-full h-[300px] object-cover" />
                </div>
                <div class="md:hidden">
                    <div class="swiper w-[400px] mt-10">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('website/solutions2.png') }}" alt="solution"
                                    class="rounded-[16px]" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('website/solutions1.png') }}" alt="solution"
                                    class="rounded-[16px]" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('website/solutions3.png') }}" alt="solution"
                                    class="rounded-[16px]" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full md:py-40 py-20 m-container">
            <div class="md:pb-20 pb-10 border-b border-white md:w-full w-[330px]">
                <h1 class="typography_h1__H_Hf_ md:w-[570px] w-[330px] text-white">
                    {{ $homepageVariables->{'news_section_title_' . app()->getLocale()} ?? '' }}
                </h1>
            </div>

            @foreach ($news->chunk(3) as $newsChunk)
                <div
                    class="flex flex-col md:flex-row items-start justify-between w-[330px] md:w-full md:py-10 py-5 border-b border-white">
                    @foreach ($newsChunk as $article)
                        <div
                            class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                            <img src="{{ $article->getFirstMediaUrl('images') }}" alt="news"
                                class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                            <div
                                class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                                <p class="typography_body__0hry6 md:mb-2 text-white">{{ $article->created_at }}</p>
                                <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                                    {{ $article->title }}
                                </p>
                                <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                                    {{ substr($article->description, 0, 50) }}...
                                </p>
                                <a class="mt-3" href="{{ route('website.article', $article->slug) }}">
                                    <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                                        {{ __('Read more') }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach


            <a href="{{ route('website.news') }}">
                <button
                    class="mt-10 md:mt-20 w-[330px] md:w-[1150px] rounded-[12px] text-white h-[60px] button_outlineBtn__3xUPv">
                    <div class="w-[330px] md:w-[1150px]">{{ __('Read all news') }}</div>
                </button>
            </a>
        </div>
        <div class="flex items-start md:items-center flex-col w-full md:py-40 py-20 m-container undefined" id="contact">
            <div class="flex items-start md:items-center flex-col">
                <h1 class="typography_h1__H_Hf_ md:text-center md:max-w-[800px] max-w-[330px] md:mb-6 mb-3 text-white">
                    {{ $homepageVariables->{'contact_section_title_' . app()->getLocale()} ?? '' }}
                </h1>
                <p class="typography_body__0hry6 md:text-center md:max-w-[500px] w-full pb-10 text-white">
                    {{ $homepageVariables->{'contact_section_text_' . app()->getLocale()} ?? '' }}
                </p>
            </div>
            <div class="border border-white p-6 rounded-[16px] md:flex space-x-20 hidden">
                <div class="bg-gray p-10 rounded-[16px] h-[435px] w-[460px]">
                    <div class="mb-10">
                        <p class="typography_p1__0Ljmd mb-2 text-white">{{ __('Contact us') }}</p>
                        <p class="typography_body__0hry6 undefined text-white">
                            {{ $homepageVariables->contact_phone ?? '' }}</p>
                    </div>
                    <div class="mb-10">
                        <p class="typography_p1__0Ljmd mb-2 text-white">{{ __('Email') }}</p>
                        <p class="typography_body__0hry6 undefined text-white">
                            {{ $homepageVariables->contact_email ?? '' }}
                        </p>
                    </div>
                    <div class="mb-10">
                        <p class="typography_p1__0Ljmd mb-2 text-white">{{ __('Address') }}</p>
                        <p class="typography_body__0hry6 undefined text-white">
                            {{ $homepageVariables->contact_address ?? '' }}
                        </p>
                    </div>
                </div>
                <div class="w-[540px]">
                    <form action="{{ route('website.contact.send') }}" method="post">
                        @csrf
                        <div class="flex flex-col space-y-4 pt-8 mb-8">
                            <input type="text"
                                class="border border-white py-4 px-6 rounded-[16px] w-full bg-background text-white placeholder:text-white relative outline-0 undefined"
                                placeholder="{{ __('Name') }}" name="name" value="" />
                            <input type="text"
                                class="border border-white py-4 px-6 rounded-[16px] w-full bg-background text-white placeholder:text-white relative outline-0 undefined"
                                placeholder="{{ __('Phone') }}" name="phone" value="" />
                            <textarea
                                class="border border-white py-4 px-6 rounded-[16px] w-full bg-background text-white placeholder:text-white h-[150px] outline-none undefined"
                                placeholder="{{ __('Message') }}" name="message"></textarea>
                        </div>
                        <button class="w-[257px] rounded-[12px] text-white h-[60px] button_primaryBtn__jr20_">
                            <div class="w-[257px]">{{ __('Send a message') }}</div>
                        </button>
                    </form>
                </div>
            </div>
            <div class="md:hidden">
                <form action="{{ route('website.contact.send') }}" method="post">
                    @csrf
                    <div class="w-[330px]">
                        <div class="flex flex-col space-y-4 pt-8 mb-8">
                            <input type="text"
                                class="border border-white py-4 px-6 rounded-[16px] w-full bg-background text-white placeholder:text-white relative outline-0 undefined"
                                placeholder="{{ __('Name') }}" name="name" value="" />
                            <input type="text"
                                class="border border-white py-4 px-6 rounded-[16px] w-full bg-background text-white placeholder:text-white relative outline-0 undefined"
                                placeholder="{{ __('Phone') }}" name="phone" value="" />
                            <textarea
                                class="border border-white py-4 px-6 rounded-[16px] w-full bg-background text-white placeholder:text-white h-[150px] outline-none undefined"
                                placeholder="{{ __('Message') }}" name="message"></textarea>
                        </div>
                        <button class="w-330px] rounded-[12px] text-white h-[60px] button_primaryBtn__jr20_">
                            <div class="w-[330px]">{{ __('Send a message') }}</div>
                        </button>
                    </div>
                </form>
                <div class="h-[1px] bg-white w-full my-14"></div>
                <div class="bg-gray p-10 rounded-[16px] h-[340px] w-[330px]">
                    <div class="mb-10">
                        <p class="typography_p1__0Ljmd mb-2 text-white">{{ __('Contact us') }}</p>
                        <p class="typography_body__0hry6 undefined text-white">
                            {{ $homepageVariables->contact_phone ?? '' }}</p>
                    </div>
                    <div class="mb-10">
                        <p class="typography_p1__0Ljmd mb-2 text-white">{{ __('Email') }}</p>
                        <p class="typography_body__0hry6 undefined text-white">
                            {{ $homepageVariables->contact_email ?? '' }}
                        </p>
                    </div>
                    <div class="mb-10">
                        <p class="typography_p1__0Ljmd mb-2 text-white">{{ __('Address') }}</p>
                        <p class="typography_body__0hry6 undefined text-white">
                            {{ $homepageVariables->contact_address ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session('success'))
        <div class="popup-overlay">
            <div class="popup-content">
                <p>{{ session('success') }}</p>
                <button onclick="this.parentElement.parentElement.style.display='none'">OK</button>
            </div>
        </div>
    @endif
@endsection
