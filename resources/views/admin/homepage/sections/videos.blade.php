<h5 class="mb-3">Videos section</h5>
<div class="col-md-12">
    <label for="videos_features_visible" class="form-label">Visible</label>

    <input
        type="checkbox"
        id="videos_features_visible"
        name="videos_features_visible"
        class="form-input"
        value="true"
        {{ isset($variables->{'videos_features_visible'}) && $variables->{'videos_features_visible'} ? 'checked' : '' }}
    />
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab-4" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab-4"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}-4" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent4">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}-4"
            role="tabpanel" aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="videos_section_title_{{ $key }}" class="form-label">Section Title
                    ({{ $label }})
                </label>
                <div class="input-group mb-3">
                    <input type="text" name="videos_section_title_{{ $key }}"
                        id="videos_section_title_{{ $key }}" class="form-control"
                        value="{{ old('videos_section_title_' . $key, $variables->{"videos_section_title_$key"} ?? '') }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="videos_section_text_{{ $key }}" class="form-label">Section Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="videos_section_text_{{ $key }}" id="videos_section_text_{{ $key }}" rows="3"
                        class="form-control">{{ old('videos_section_text_' . $key, $variables->{"videos_section_text_$key"} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endforeach
</div>

<a href="{{ route('admin.videos.index') }}" class="mt-2 mb-4">
    <button type="button" class="btn btn-secondary">Edit Videos List</button>
</a>
