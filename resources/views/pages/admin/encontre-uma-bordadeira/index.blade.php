<x-app-layout>
    @section('content_header')
        <h1>Encontre Uma Bordadeira</h1>
    @stop

    @section('content')
        <form action="{{ route('admin.encontre-uma-bordadeira.update', ['encontreUmaBordadeira' => $encontreUmaBordadeira->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="p-4 my-5 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <x-textarea label="Descrição" content="{{ old('description') ?? $encontreUmaBordadeira->description }}"
                                    id="description"
                                    name="description"/>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-end py-5">
                <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                   icon="fas fa-lg fa-save"/>
            </div>
        </form>
    @stop
</x-app-layout>
