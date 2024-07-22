@php
    $config = [
        "height" => "300",
        "lang" => "pt-BR",
        "toolbar" => [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ],
    ]
@endphp
{{-- Minimal --}}
<x-adminlte-text-editor :label="$label" :name="$name" :config="$config">
    {{ $content }}
</x-adminlte-text-editor>
