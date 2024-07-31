<div class="w-100">
    <label class="text-center">{{ $label }}</label>
    <div class="image-preview mt-3" id="imagePreview-{{ $id }}">
        <span id="imagePreviewDefaultText-{{ $id }}" class="text-muted">Clique para selecionar imagens</span>
        <input type="file" class="form-control-file" name="{{ $name ?? $id }}{{ isset($multiple) ? '[]' : '' }}"
               id="{{ $id }}"
               accept="{{ $accept }}" data-initial-files="{{ json_encode($initialFiles) }}"
               {{ isset($multiple) ? 'multiple' : '' }} data-url-add="{{ $urlAdd ?? '' }}"
               data-url-delete="{{ $urlDelete ?? '' }}"
               data-enable-auto-upload="{{ $enableAutoUpload ?? ''}}"
               data-show-input="{{ $showInput ?? ''}}"
               data-input-value="{{ json_encode($inputValue) }}"
               hidden>

    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        fileUpload('{{ $id }}')
    });
</script>
