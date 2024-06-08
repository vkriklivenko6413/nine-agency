<h5 class="mb-3">AI Chatbots section</h5>

<nav>
    <div class="nav nav-tabs" id="nav-tab-5" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab-5"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}-5" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent5">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}-5"
            role="tabpanel" aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="ai_section_title_{{ $key }}" class="form-label">Section Title
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <input type="text" name="ai_section_title_{{ $key }}"
                        id="ai_section_title_{{ $key }}" class="form-control"
                        value="{{ old('ai_section_title_' . $key, $variables->{"ai_section_title_$key"} ?? '') }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="ai_section_text_{{ $key }}" class="form-label">Section Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="ai_section_text_{{ $key }}" id="ai_section_text_{{ $key }}" rows="3"
                        class="form-control">{{ old('ai_section_text_' . $key, $variables->{"ai_section_text_$key"} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endforeach
</div>

@for ($i = 1; $i <= 3; $i++)
    <div class="col-md-4">
        <label for="ai_section_img_{{ $i }}" class="form-label">Image {{ $i }}</label>
        <div class="input-group mb-3">
            <input type="file" name="ai_section_img_{{ $i }}" id="ai_section_img_{{ $i }}"
                class="form-control" accept="image/*">
        </div>
    </div>
@endfor
