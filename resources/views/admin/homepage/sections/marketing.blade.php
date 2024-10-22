<h5 class="mb-3">Marketing section</h5>
<div class="col-md-12">
    <label for="marketing_features_visible" class="form-label">Visible</label>

    <input
        type="checkbox"
        id="marketing_features_visible"
        name="marketing_features_visible"
        class="form-input"
        value="true"
        {{ isset($variables->{'marketing_features_visible'}) && $variables->{'marketing_features_visible'} ? 'checked' : '' }}
    />
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab-3" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab-3"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}-3" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent3">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}-3"
            role="tabpanel" aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="marketing_section_title_{{ $key }}" class="form-label">Section Title
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <input type="text" name="marketing_section_title_{{ $key }}"
                        id="marketing_section_title_{{ $key }}" class="form-control"
                        value="{{ old('marketing_section_title_' . $key, $variables->{"marketing_section_title_$key"} ?? '') }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="marketing_section_text_{{ $key }}" class="form-label">Section Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="marketing_section_text_{{ $key }}" id="marketing_section_text_{{ $key }}"
                        rows="3" class="form-control">{{ old('marketing_section_text_' . $key, $variables->{"marketing_section_text_$key"} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="col-md-3">
    <label for="years_experience" class="form-label">Years of Experience</label>
    <div class="input-group mb-3">
        <input type="number" name="years_experience" id="years_experience" class="form-control"
            value="{{ old('years_experience', $variables->years_experience ?? '') }}">
    </div>
    <div class="input-group mb-3">
        <input type="file" name="years_experience_img" id="years_experience_img" class="form-control"
            accept="image/*">
    </div>
</div>
<div class="col-md-3">
    <label for="team_members" class="form-label">Team Members</label>
    <div class="input-group mb-3">
        <input type="number" name="team_members" id="team_members" class="form-control"
            value="{{ old('team_members', $variables->team_members ?? '') }}">
    </div>
    <div class="input-group mb-3">
        <input type="file" name="team_members_img" id="team_members_img" class="form-control" accept="image/*">
    </div>
</div>
<div class="col-md-3">
    <label for="satisfied_clients" class="form-label">Satisfied Clients</label>
    <div class="input-group mb-3">
        <input type="number" name="satisfied_clients" id="satisfied_clients" class="form-control"
            value="{{ old('satisfied_clients', $variables->satisfied_clients ?? '') }}">
    </div>
    <div class="input-group mb-3">
        <input type="file" name="satisfied_clients_img" id="satisfied_clients_img" class="form-control"
            accept="image/*">
    </div>
</div>
<div class="col-md-3">
    <label for="company_videos" class="form-label">Company Videos</label>
    <div class="input-group mb-3">
        <input type="number" name="company_videos" id="company_videos" class="form-control"
            value="{{ old('company_videos', $variables->company_videos ?? '') }}">
    </div>
    <div class="input-group mb-3">
        <input type="file" name="company_videos_img" id="company_videos_img" class="form-control" accept="image/*">
    </div>
</div>
