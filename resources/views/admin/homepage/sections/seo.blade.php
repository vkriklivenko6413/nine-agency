<h5 class="mb-3">SEO section</h5>

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
                        value="{{ old('seo_section_title_' . $key, $variables?->{"seo_section_title_$key"}) }}">
                </div>
            </div>
            <div class="col-md-12">
                <label for="seo_section_text_{{ $key }}" class="form-label">Section Text
                    ({{ $label }})</label>
                <div class="input-group mb-3">
                    <textarea name="seo_section_text_{{ $key }}" id="seo_section_text_{{ $key }}" rows="3"
                        class="form-control">{{ old('seo_section_text_' . $key, $variables?->{"seo_section_text_$key"}) }}</textarea>
                </div>
            </div>
            <div class="accordion mb-3" id="accordionSEO_{{ $key }}">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse"
                                data-coreui-target="#collapse{{ $i }}_{{ $key }}"
                                aria-expanded="false" aria-controls="collapse{{ $i }}_{{ $key }}">
                                SEO Block #{{ $i }} [{{ $label }}]
                            </button>
                        </h2>
                        <div id="collapse{{ $i }}_{{ $key }}" class="accordion-collapse collapse"
                            data-coreui-parent="#accordionSEO_{{ $key }}">
                            <div class="accordion-body">
                                <div class="col-md-12">
                                    <label for="seo_block{{ $i }}_title_{{ $key }}"
                                        class="form-label">Block {{ $i }} Title
                                        ({{ $label }})</label>
                                    <div class="input-group mb-3">
                                        <input type="text"
                                            name="seo_block{{ $i }}_title_{{ $key }}"
                                            id="seo_block{{ $i }}_title_{{ $key }}"
                                            class="form-control"
                                            value="{{ old('seo_block' . $i . '_title_' . $key, $variables?->{"seo_block{$i}_title_$key"}) }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="seo_block{{ $i }}_text_{{ $key }}"
                                        class="form-label">Block {{ $i }} Text
                                        ({{ $label }})</label>
                                    <div class="input-group mb-3">
                                        <textarea name="seo_block{{ $i }}_text_{{ $key }}"
                                            id="seo_block{{ $i }}_text_{{ $key }}" rows="3" class="form-control">{{ old('seo_block' . $i . '_text_' . $key, $variables?->{"seo_block{$i}_text_$key"}) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    @endforeach
</div>
