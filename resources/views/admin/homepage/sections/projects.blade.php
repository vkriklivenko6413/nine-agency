<h5 class="mb-3">Projects section</h5>
<div class="col-md-12">
    <label for="projects_features_visible" class="form-label">Visible</label>

    <input
        type="hidden"
        name="projects_features_visible"
        class="form-input"
        value="false"
    />

    <input
        type="checkbox"
        id="projects_features_visible"
        name="projects_features_visible"
        class="form-input"
        value="true"
        {{ isset($variables->{'projects_features_visible'}) && $variables->{'projects_features_visible'} === 'true' ? 'checked' : '' }}
    />
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab-1" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab-1"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}-1" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent1">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}-1"
            role="tabpanel" aria-labelledby="nav-{{ $key }}-tab-1" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="projects_section_title_{{ $key }}" class="form-label">Section Title
                    ({{ $label }})
                </label>
                <div class="input-group mb-3">
                    <input type="text" name="projects_section_title_{{ $key }}"
                        id="projects_section_title_{{ $key }}" class="form-control"
                        value="{{ old('projects_section_title_' . $key, $variables->{'projects_section_title_' . $key} ?? '') }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="projects_section_text_{{ $key }}" class="form-label">Section Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="projects_section_text_{{ $key }}" id="projects_section_text_{{ $key }}"
                        rows="3" class="form-control">{{ old('projects_section_text_' . $key, $variables->{'projects_section_text_' . $key} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endforeach
</div>

<a href="{{ route('admin.projects.index') }}" class="mt-2 mb-4">
    <button type="button" class="btn btn-secondary">Edit Projects List</button>
</a>
