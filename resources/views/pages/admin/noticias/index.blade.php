<x-app-layout>
    @section('content_header')
        <div class="d-flex justify-content-between">
            <h1>Noticias</h1>
            <a href="{{ route('admin.noticias.create') }}" class="btn btn-info">
                <i class="fas fa-plus"></i>
                Adicionar
            </a>
        </div>
    @stop

    @section('content')
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" class="text-left">Titulo</th>
                <th scope="col" class="text-left">Criador</th>
                <th scope="col" class="text-left">Data Criação</th>
                <th scope="col" class="text-left">Data Ultima Alteração</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->title }}</td>
                    <td>{{ $noticia->user->name }}</td>
                    <td>{{ $noticia->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $noticia->updated_at?->format('d/m/Y H:i') }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('admin.noticias.edit', ['noticia' => $noticia->id]) }}"
                           class="btn btn-success mx-3">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="" data-toggle="modal" data-target="#confirm-delete"
                           class="btn btn-danger btnDelete"
                           data-url="{{ route('admin.noticias.destroy', ['noticia' => $noticia->id]) }}">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @stop
</x-app-layout>

<x-modal title="Deletar Usuário" id="confirm-delete" show="">
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

