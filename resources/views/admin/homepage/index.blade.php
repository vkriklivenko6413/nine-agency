@extends('admin.layouts.app')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title mb-0">Edit homepage</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                - {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.homepage.update') }}" method="post" class="mt-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <label for="intro_title_en" class="form-label">Intro Title (EN)</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="intro_title_en" id="intro_title_en" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="intro_title_ro" class="form-label">Intro Title (RO)</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="intro_title_ro" id="intro_title_ro" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="intro_title_ru" class="form-label">Intro Title (RU)</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="intro_title_ru" id="intro_title_ru" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <label for="intro_text_en" class="form-label">Intro Text (EN)</label>
                                <div class="input-group mb-3">
                                    <textarea name="intro_text_en" id="intro_text_en" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="intro_text_ro" class="form-label">Intro Text (RO)</label>
                                <div class="input-group mb-3">
                                    <textarea name="intro_text_ro" id="intro_text_ro" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="intro_text_ru" class="form-label">Intro Text (RU)</label>
                                <div class="input-group mb-3">
                                    <textarea name="intro_text_ru" id="intro_text_ru" rows="5" class="form-control"></textarea>
                                </div>
                            </div>


                            {{-- <div class="col-md-6">
                                <label for="homepage_video" class="form-label">Homepage video</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="homepage_video" id="homepage_video" class="form-control"
                                        accept="video/*">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="static_background" class="form-label">Static background</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="static_background" id="static_background"
                                        class="form-control" accept="image/*">
                                </div>
                            </div>

                            <hr>

                            <div class="col-md-6">
                                <label for="contact_description_en" class="form-label">Contact Page Description (EN)</label>
                                <div class="input-group mb-3">
                                    <textarea name="contact_description_en" id="contact_description_en" rows="5" class="form-control">{{
                                        old('contact_description_en', $settings->firstWhere('name', 'contact_description_en')?->value)
                                    }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact_description_az" class="form-label">Contact Page Description (AZ)</label>
                                <div class="input-group mb-3">
                                    <textarea name="contact_description_az" id="contact_description_az" rows="5" class="form-control">{{
                                        old('contact_description_az', $settings->firstWhere('name', 'contact_description_az')?->value)
                                    }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact_email" class="form-label">Contact Email</label>
                                <div class="input-group mb-3">
                                    <input type="email" name="contact_email" id="contact_email"
                                        class="form-control" value="{{
                                            old('contact_email', $settings->firstWhere('name', 'contact_email')?->value)
                                        }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact_phone" class="form-label">Contact Phone</label>
                                <div class="input-group mb-3">
                                    <input type="phone" name="contact_phone" id="contact_phone"
                                        class="form-control" value="{{
                                            old('contact_phone', $settings->firstWhere('name', 'contact_phone')?->value)
                                        }}">
                                </div>
                            </div>

                            <hr>

                            <div class="col-md-6">
                                <label for="subscribe_description_en" class="form-label">Subscribe Page Description (EN)</label>
                                <div class="input-group mb-3">
                                    <textarea name="subscribe_description_en" id="subscribe_description_en" rows="5" class="form-control">{{
                                        old('subscribe_description_en', $settings->firstWhere('name', 'subscribe_description_en')?->value)
                                    }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subscribe_description_az" class="form-label">Subscribe Page Description (AZ)</label>
                                <div class="input-group mb-3">
                                    <textarea name="subscribe_description_az" id="subscribe_description_az" rows="5" class="form-control">{{
                                        old('subscribe_description_az', $settings->firstWhere('name', 'subscribe_description_az')?->value)
                                    }}</textarea>
                                </div>
                            </div>

                            <hr> --}}

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark mt-3 mb-3">Update</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
