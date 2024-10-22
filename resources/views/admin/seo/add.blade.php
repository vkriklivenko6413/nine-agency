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

                    <h4 class="card-title mb-0">Add new Seo</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                - {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.seo.store') }}" method="post" class="mt-3"
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
                                                ({{ $label }})*</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="title[{{ $key }}]"
                                                       id="title_{{ $key }}" class="form-control"
                                                       value="{{ old('title.' . $key) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="description_{{ $key }}" class="form-label">Description
                                                ({{ $label }})*</label>
                                            <div class="input-group mb-3">
                                                <textarea name="description[{{ $key }}]" id="description_{{ $key }}" rows="3"
                                                          class="form-control" required>{{ old('description.' . $key) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="images" class="form-label">Images*</label>
                                            <div class="input-group mb-3">
                                                <input type="file" name="images[{{ $key }}][]" id="images" class="form-control" accept="image/*" multiple required>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="slug" class="form-label">Slug (URL)</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="slug"
                                           id="slug" class="form-control"
                                           value="{{ old('slug') }}">
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
