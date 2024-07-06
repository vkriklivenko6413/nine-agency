@extends('admin.layouts.app')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title mb-5">Edit settings</h2>

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

                            <div class="col-md-6 mb-3">
                                @if ($settings->website_logo ?? '')
                                    <img style="background-color: gray" src="{{ Storage::url($settings->website_logo ?? '') }}" alt=""
                                        style="max-height:100px;">
                                @else
                                    <span>No website logo yet.</span>
                                @endif
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="website_logo" class="form-label">Website logo</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="website_logo" id="website_logo" class="form-control"
                                        accept="image/*">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="instagram_url" class="form-label">Instagram URL</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="instagram_url" id="instagram_url" class="form-control"
                                        value="{{ old('instagram_url', $settings->instagram_url ?? '') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="facebook_url" class="form-label">Facebook URL</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="facebook_url" id="facebook_url" class="form-control"
                                        value="{{ old('facebook_url', $settings->facebook_url ?? '') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="tiktok_url" class="form-label">Tiktok URL</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="tiktok_url" id="tiktok_url" class="form-control"
                                        value="{{ old('tiktok_url', $settings->tiktok_url ?? '') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="youtube_url" class="form-label">Youtube URL</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="youtube_url" id="youtube_url" class="form-control"
                                        value="{{ old('youtube_url', $settings->youtube_url ?? '') }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-dark mt-3 mb-3">Update Settings</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
