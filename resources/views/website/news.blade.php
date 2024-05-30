@extends('website.layouts.app')

@section('content')
    <div class="flex flex-col w-full md:py-40 py-20 m-container">
        <div class="md:pb-20 pb-10 border-b border-white md:w-full w-[330px]">
            <h1 class="typography_h1__H_Hf_ md:w-[570px] w-[330px] text-white">
                Stay up - to - date with our latest news.
            </h1>
        </div>
        <div
            class="flex flex-col md:flex-row items-start justify-between w-[330px] md:w-full md:py-10 py-5 border-b border-white">
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/1">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/2">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/3">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col md:flex-row items-start justify-between w-[330px] md:w-full md:py-10 py-5 border-b border-white">
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/4">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/5">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/6">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col md:flex-row items-start justify-between w-[330px] md:w-full md:py-10 py-5 border-b border-white">
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/7">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/8">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
            <div
                class="md:block flex md:flex-col items-center rounded-[16px] w-[330px] md:w-[364px] md:h-[400px] h-[120px] relative mb-6">
                <img src="{{ asset('website/new.png') }}" alt="news"
                    class="rounded-t-[16px] md:w-[364px] md:h-[180px] w-[133px] h-[120px] object-cover" />
                <div
                    class="bg-gray rounded-[16px] md:p-6 p-4 md:-mt-4 absolute md:min-h-[213px] md:w-full w-[213px] h-[120px] right-0">
                    <p class="typography_body__0hry6 md:mb-2 text-white">28 May 2024</p>
                    <p class="typography_body__0hry6 mb-4 hidden md:block text-white">
                        Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus scelerisque
                        egestas risus
                        posuere.
                        Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim etiam
                        ac amet
                        aliquam.
                    </p>
                    <p class="typography_body__0hry6 mb-1 md:hidden text-white">
                        Lorem ipsum dolor sit amet consecte...
                    </p>
                    <a class="mt-3" href="/news/9">
                        <p class="typography_body__0hry6 underline hover:no-underline text-redLight">
                            Read more</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
