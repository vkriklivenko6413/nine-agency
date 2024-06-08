<h5 class="mb-3">News section</h5>

<nav>
    <div class="nav nav-tabs" id="nav-tab-6" role="tablist">
        @foreach (config('app.languages') as $key => $label)
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-{{ $key }}-tab-6"
                data-coreui-toggle="tab" data-coreui-target="#nav-{{ $key }}-6" type="button" role="tab"
                aria-controls="nav-{{ $key }}"
                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>
</nav>
<div class="tab-content" id="nav-tabContent6">
    @foreach (config('app.languages') as $key => $label)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="nav-{{ $key }}-6"
            role="tabpanel" aria-labelledby="nav-{{ $key }}-tab" tabindex="0">
            <div class="col-md-12 mt-3">
                <label for="news_section_title_{{ $key }}" class="form-label">Section Title
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <input type="text" name="news_section_title_{{ $key }}"
                        id="news_section_title_{{ $key }}" class="form-control"
                        value="{{ old('news_section_title_' . $key, $variables->{"news_section_title_$key"} ?? '') }}">
                </div>
            </div>
        </div>
    @endforeach
</div>

<a href="" class="mt-2 mb-4">
    <button type="button" class="btn btn-secondary">Edit News</button>
</a>
