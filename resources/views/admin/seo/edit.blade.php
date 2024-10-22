@extends('admin.layouts.app')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <a href="{{ route('admin.seo.index') }}">
                <button type="button" class="btn btn-secondary mt-3 mb-3">
                    < Back to Seo</button>
            </a>

            <div class="card mb-3">
                <div class="card-body">

                    <h4 class="card-title mb-0">Edit Seo</h4>

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

                    <form action="{{ route('admin.seo.update', $seo->id) }}" method="post" class="mt-3"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach (config('app.languages') as $key => $label)
                                        <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                                id="nav-{{ $key }}-tab" data-coreui-toggle="tab"
                                                data-coreui-target="#nav-{{ $key }}" type="button" role="tab"
                                                aria-controls="nav-{{ $key }}"
                                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
                                    @endforeach
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                @foreach (config('app.languages') as $key => $label)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                         id="nav-{{ $key }}" role="tabpanel"
                                         aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
                                        <div class="col-md-12 mt-3">
                                            <label for="title_{{ $key }}" class="form-label">Title
                                                ({{ $label }})
                                                *</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="title[{{ $key }}]"
                                                       id="title_{{ $key }}" class="form-control"
                                                       value="{{ old('title.' . $key, $seo->getTranslation('title', $key)) }}"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="description_{{ $key }}" class="form-label">Description
                                                ({{ $label }})*</label>
                                            <div class="input-group mb-3">
                                                <textarea name="description[{{ $key }}]" id="description_{{ $key }}" rows="3"
                                                          class="form-control" required>{{ old('description.' . $key, $seo->getTranslation('description', $key)) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="slug" class="form-label">Slug (URL)</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="slug" id="slug" class="form-control"
                                           value="{{ old('slug', $seo->slug) }}">
                                </div>
                            </div>

                            <div class="col-md-12 mb-3 mt-3">
                                <label class="form-label">
                                    <h5>Existing Images</h5>
                                </label>
                                <div class="row">
                                    @foreach ($seo->getMedia('images') as $image)
                                        <div class="col-md-3 mt-2 position-relative">
                                            <div class="d-flex justify-content-center align-items-center"
                                                 style="height: 300px;">
                                                <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail mb-2"
                                                     style="max-height: 100%; max-width: 100%;">
                                                <div class="position-absolute top-50 start-50 translate-middle">
                                                    <a href="{{ route('admin.seo.images.destroy', ['seo' => $seo->id, 'mediaId' => $image->id]) }}"
                                                       class="delete">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="images" class="form-label">Add new images</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="images[]" id="images" class="form-control"
                                           accept="image/*" multiple>
                                </div>
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-dark btn-lg mt-3 mb-3">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.delete-modal')

@endsection
