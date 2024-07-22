<x-app-layout>
    @section('content_header')
        <h1>Bordadeiras</h1>
    @stop

    @section('content')
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" class="text-left">Nome</th>
                <th scope="col" class="text-left">Thumbnail</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bordadeiras as $bordadeira)
                <tr>
                    <td>{{ $bordadeira->nome }}</td>
                    <td>
                        <img src="{{ $bordadeira->thumbnail_url }}" class="rounded-circle w-100px h-100px object-cover">
                    </td>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('admin.bordadeiras.edit', ['bordadeira' => $bordadeira->id]) }}"
                           class="btn btn-primary mx-3">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="" data-toggle="modal" data-target="#confirm-bordadeira-delete" class="btn btn-danger btnDelete"
                           data-url="{{ route('admin.bordadeiras.destroy', ['bordadeira' => $bordadeira->id]) }}">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @stop
</x-app-layout>


<x-modal title="Deletar Bordadeiras" id="confirm-bordadeira-delete" show="">
    <form method="post" action="" class="p-6">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Tem certeza de que deseja excluir?') }}
        </h2>


        <div class="mt-5 d-flex justify-content-end">
            <x-secondary-button data-dismiss="modal">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-danger-button class="ml-3" type="submit">
                {{ __('Deletar') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
