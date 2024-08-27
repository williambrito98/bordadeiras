<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.depoimentos.index') }}">Depoimentos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo Depoimento</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <form action="{{ route('admin.depoimentos.store') }}" method="post">
            @csrf
            <div class="p-4 bg-white shadow">
                <div class="row">
                    <div class="col-md-12">
                        <x-adminlte-input name="autor" label="Autor"
                                          placeholder="Autor" disable-feedback/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <x-adminlte-textarea name="text" label="Texto"
                                             placeholder="Depoimento" disable-feedback/>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ route('admin.depoimentos.index') }}" class="btn btn-light mx-2 border">Voltar</a>
                    <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                       icon="fas fa-lg fa-save"/>
                </div>
            </div>

        </form>
    @stop

</x-app-layout>
