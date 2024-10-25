<h5 class="mb-3">SEO section</h5>
<div class="col-md-12">
    <label for="seo_features_visible" class="form-label">Visible</label>
    <input
        type="hidden"
        name="seo_features_visible"
        class="form-input"
        value="false"
    />
    <input
        type="checkbox"
        id="seo_features_visible"
        name="seo_features_visible"
        class="form-input"
        value="true"
        {{ isset($variables->{'seo_features_visible'}) && $variables->{'seo_features_visible'} === 'true' ? 'checked' : '' }}
    />
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab-2" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab-2"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}-2" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent2">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}-2"
            role="tabpanel" aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="seo_section_title_{{ $key }}" class="form-label">Section Title
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <input type="text" name="seo_section_title_{{ $key }}"
                        id="seo_section_title_{{ $key }}" class="form-control"
                        value="{{ old('seo_section_title_' . $key, $variables->{"seo_section_title_$key"} ?? '') }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="seo_section_text_{{ $key }}" class="form-label">Section Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="seo_section_text_{{ $key }}" id="seo_section_text_{{ $key }}" rows="3"
                        class="form-control">{{ old('seo_section_text_' . $key, $variables->{"seo_section_text_$key"} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endforeach
</div>
