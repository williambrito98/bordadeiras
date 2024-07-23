<x-app-layout>
    @section('content_header')
        <div class="d-flex justify-content-between">
            <h1>Usuários</h1>
            <a href="{{ route('admin.users.create') }}" class="btn btn-info">
                <i class="fas fa-plus"></i>
                Adicionar
            </a>
        </div>
    @stop

    @section('content')
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" class="text-left">Nome</th>
                <th scope="col" class="text-left">Email</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                           class="btn btn-success mx-3">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="" data-toggle="modal" data-target="#confirm-delete"
                           class="btn btn-danger btnDelete"
                           data-url="{{ route('admin.users.destroy', ['user' => $user->id]) }}">
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

