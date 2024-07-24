@php
    $config = [
        "height" => "300",
        "lang" => "pt-BR"
    ]
@endphp
<x-adminlte-text-editor :label="$label" :name="$name" :config="$config">
    {!! $content ?? '' !!}
</x-adminlte-text-editor>
