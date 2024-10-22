<h5 class="mb-3">Contact Us section</h5>
<div class="col-md-12">
    <label for="contact_features_visible" class="form-label">Visible</label>

    <input
        type="checkbox"
        id="contact_features_visible"
        name="contact_features_visible"
        class="form-input"
        value="true"
        {{ isset($variables->{'contact_features_visible'}) && $variables->{'contact_features_visible'} ? 'checked' : '' }}
    />
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab-7" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab-7"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}-7" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent7">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}-7"
            role="tabpanel" aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="contact_section_title_{{ $key }}" class="form-label">Section Title
                    ({{ $label }})
                </label>
                <div class="input-group mb-3">
                    <input type="text" name="contact_section_title_{{ $key }}"
                        id="contact_section_title_{{ $key }}" class="form-control"
                        value="{{ old('contact_section_title_' . $key, $variables->{"contact_section_title_$key"} ?? '') }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="contact_section_text_{{ $key }}" class="form-label">Section Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="contact_section_text_{{ $key }}" id="contact_section_text_{{ $key }}" rows="3"
                        class="form-control">{{ old('contact_section_text_' . $key, $variables->{"contact_section_text_$key"} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="col-md-4">
    <label for="contact_phone" class="form-label">Contact Phone</label>
    <div class="input-group mb-3">
        <input type="text" name="contact_phone" id="contact_phone" class="form-control"
            value="{{ old('contact_phone', $variables->contact_phone ?? '') }}">
    </div>
</div>
<div class="col-md-4">
    <label for="contact_email" class="form-label">Contact Email</label>
    <div class="input-group mb-3">
        <input type="text" name="contact_email" id="contact_email" class="form-control"
            value="{{ old('contact_email', $variables->contact_email ?? '') }}">
    </div>
</div>
<div class="col-md-4">
    <label for="contact_address" class="form-label">Contact Address</label>
    <div class="input-group mb-3">
        <input type="text" name="contact_address" id="contact_address" class="form-control"
            value="{{ old('contact_address', $variables->contact_address ?? '') }}">
    </div>
</div>
