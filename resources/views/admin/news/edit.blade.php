@extends('admin.layouts.app')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <a href="{{ route('admin.news.index') }}">
                <button type="button" class="btn btn-secondary mt-3 mb-3">
                    < Back to News</button>
            </a>

            <div class="card mb-3">
                <div class="card-body">

                    <h4 class="card-title mb-0">Edit article</h4>

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

                    <div class="col-md-12 mt-3">
                        <img src="{{ $article->getFirstMediaUrl('images') }}" alt="Image" class="img-thumbnail mb-2"
                            style="max-height: 200px;">
                    </div>

                    <form action="{{ route('admin.news.update', $article->id) }}" method="post" class="mt-3"
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
                                                    value="{{ old('title.' . $key, $article->getTranslation('title', $key)) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="description_{{ $key }}" class="form-label">Description
                                                ({{ $label }})*</label>
                                            <div class="input-group mb-3">
                                                <textarea name="description[{{ $key }}]" id="description_{{ $key }}" rows="3"
                                                    class="form-control" required>{{ old('description.' . $key, $article->getTranslation('description', $key)) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="slug" class="form-label">Slug (URL)</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        value="{{ old('slug', $article->slug) }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="image" class="form-label">Update image</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="image" id="image" class="form-control"
                                        accept="image/*">
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
@endsection
