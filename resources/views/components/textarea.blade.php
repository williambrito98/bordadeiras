@php
    $config = [
        "height" => "300",
        "lang" => "pt-BR"
    ]
@endphp

@if(isset($withWidget))
    <x-adminlte-text-editor :label="$label" :name="$name" :config="$config">
        {!! $content ?? '' !!}
    </x-adminlte-text-editor>
@else
    <div class="form-group">
        <label for="{{$name}}">{{$label}}</label>
        <textarea name="{{$name}}" id="{{$name}}" class="form-control" rows="5">{{ $content ?? '' }}</textarea>
    </div>
@endif
