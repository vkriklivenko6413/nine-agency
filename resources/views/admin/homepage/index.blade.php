@extends('admin.layouts.app')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title mb-5">Edit homepage</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                - {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.homepage.update') }}" method="post" class="mt-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            @include('admin.homepage.sections.intro')

                            <hr>

                            @include('admin.homepage.sections.projects')

                            <hr>

                            @include('admin.homepage.sections.seo')

                            <hr>

                            @include('admin.homepage.sections.marketing')

                            <hr>

                            @include('admin.homepage.sections.videos')

                            <hr>

                            @include('admin.homepage.sections.ai')

                            <hr>

                            @include('admin.homepage.sections.news')

                            <hr>

                            @include('admin.homepage.sections.contact')

                            <hr>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-dark mt-3 mb-3">Update Homepage</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
