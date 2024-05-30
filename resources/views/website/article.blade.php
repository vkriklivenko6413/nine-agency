@extends('website.layouts.app')

@section('content')
    <div class="flex flex-col w-full md:py-40 py-20 m-container">
        <p class="typography_p1__0Ljmd undefined text-white">Lorem ipsum dolor sit amet consectetur</p>
        <p class="typography_body__0hry6 mb-4 text-white">31 May 2024</p>
        <img src="{{ asset('website/new.png') }}" alt="Lorem ipsum dolor sit amet consectetur"
            class="w-full md:h-[575px] h-[265px] object-cover mb-4 md:mb-8 rounded-[16px]">
        <p class="typography_body__0hry6 w-full text-white">Lorem ipsum dolor sit amet consectetur. Morbi tincidunt tempus
            scelerisque egestas risus posuere. Aliquet neque mauris vehicula viverra. Habitant in sapien quis dolor enim
            etiam ac amet aliquam.
        </p>
    </div>
@endsection
