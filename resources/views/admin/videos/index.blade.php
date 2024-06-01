@extends('admin.layouts.app')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title mb-5">Videos list</h2>

                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h5>Add new</h5>

                    <form action="{{ route('admin.videos.store') }}" method="post" class="mt-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="videos" class="form-label">Videos</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="videos[]" id="videos" class="form-control"
                                        accept="video/*" required multiple>
                                </div>
                            </div>
                            <div class="col-md-1 mt-0">
                                <button type="submit" class="btn btn-dark mt-3 mb-3">Save</button>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-12 mb-3 mt-3">
                        <label class="form-label">
                            <h5>Existing Videos</h5>
                        </label>
                        <div class="row">
                            @if ($videos->count())
                                @foreach ($videos as $video)
                                    <div class="col-md-4 mt-2 position-relative">
                                        <div class="d-flex justify-content-center align-items-center"
                                            style="height: 300px;">
                                            <video width="100%" height="100%" controls>
                                                <source src="{{ Storage::url($video->video) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="position-absolute top-50 start-50 translate-middle">
                                                <a href="{{ route('admin.videos.destroy', $video->id) }}"
                                                    class="delete">
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>No video files added yet.</span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.delete-modal')
    
@endsection
