<h5 class="mb-3">Intro section</h5>

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}" role="tabpanel"
            aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="intro_title_{{ $key }}" class="form-label">Intro Title
                    ({{ $label }})
                </label>
                <div class="input-group mb-3">
                    <input type="text" name="intro_title_{{ $key }}" id="intro_title_{{ $key }}"
                        class="form-control"
                        value="{{ old('intro_title_' . $key, $variables->{'intro_title_' . $key} ?? '') }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="intro_text_{{ $key }}" class="form-label">Intro Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="intro_text_{{ $key }}" id="intro_text_{{ $key }}" rows="3"
                        class="form-control">{{ old('intro_text_' . $key, $variables->{'intro_text_' . $key} ?? '') }}</textarea>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="col-md-12 mb-3">
    <label for="meeting_url" class="form-label">Book a Meeting URL</label>
    <div class="input-group mb-3">
        <input type="url" name="meeting_url" id="meeting_url" class="form-control"
            value="{{ old('meeting_url', $variables->meeting_url ?? '') }}">
    </div>
</div>
