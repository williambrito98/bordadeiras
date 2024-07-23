<x-app-layout>
    @section('content_header')
        <h1>Home</h1>
    @stop

    @section('content')
        <form action="{{ route('admin.home.update') }}" method="post">
            @csrf
            @method('PUT')
            @foreach($homeSecao as $secao)
                <input type="hidden" name="id[]" value="{{ $secao->id }}">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h4>Seção: {{ $secao->titulo }}</h4>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <x-input-label label="Titulo">
                                <x-slot name="value">Titulo</x-slot>
                            </x-input-label>
                            <x-text-input placeholder="Titulo" class="form-control" label="Titulo" name="titulo[]"
                                          value="{{ $secao->titulo }}"/>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <x-textarea label="Conteudo" :content="$secao->conteudo" id="conteudo" name="conteudo[]"/>
                        </div>
                    </div>

                </div>
            @endforeach

            <div class="d-flex justify-content-end py-5">
                <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                   icon="fas fa-lg fa-save"/>
            </div>
        </form>
    @stop
</x-app-layout>
