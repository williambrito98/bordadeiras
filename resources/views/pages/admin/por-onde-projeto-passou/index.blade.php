<x-app-layout>
    @section('content_header')
        <div class="d-flex justify-content-between">
            <h1>Por Onde Projeto Passou</h1>
            <a href="{{ route('admin.por-onde-projeto-passou.create') }}" class="btn btn-info">
                <i class="fas fa-plus"></i>
                Adicionar
            </a>
        </div>
    @stop

    @section('content')
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" class="text-left">Tipo</th>
                <th scope="col" class="text-left">Descrição</th>
                <th scope="col" class="text-left">Data Criação</th>
                <th scope="col" class="text-center">Ordem</th>
                <th scope="col" class="text-left">Visivel</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($locais as $local)
                <tr data-id="{{ $local->id }}">
                    <td>{{ $local->iframe_url ? 'Youtube' : 'Imagem' }}</td>
                    <td>{{ $local->description }}</td>
                    <td>{{ $local->created_at->format('d/m/Y H:i') }}</td>
                    <td class="text-center">
                        <x-adminlte-input style="width: 1px" type="number" class="order" name="order" id="order"
                                          value="{{ $local->order }}" disable-feedback/>
                    </td>
                    <td>
                        <x-adminlte-select2 name="visivel" id="visivel" class="visivel">
                            <option {{ $local->visivel ? 'selected' : '' }} value="1">Sim</option>
                            <option {{ !$local->visivel ? 'selected' : '' }} value="0">Não</option>
                        </x-adminlte-select2>
                    </td>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('admin.por-onde-projeto-passou.edit', ['por_onde_projeto_passou' => $local->id]) }}"
                           class="btn btn-success mx-3">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="" data-toggle="modal" data-target="#confirm-delete"
                           class="btn btn-danger btnDelete"
                           data-url="{{ route('admin.por-onde-projeto-passou.destroy', ['por_onde_projeto_passou' => $local->id]) }}">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @stop

    @push('js')
        <script>
            $(document).ready(function () {
                $('.order').change(function () {
                    const order = $(this).val();
                    const localId = $(this).closest('tr').data('id');

                    $.ajax({
                        url: `/admin/por-onde-projeto-passou/${localId}/updateOrder/${order}`,
                        type: "GET",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        contentType: false,
                        processData: false,
                        global: true,
                        beforeSend: function () {
                            showLoading();
                        },
                        success: function (data) {
                            showNotification("Salvo com sucesso");
                        },
                        error: function (error) {
                            console.log(error);
                            showNotification("Erro ao salvar", "error");
                        },
                        complete: function () {
                            hideLoading();
                        },
                    });
                })


                $('.visivel').change(function () {
                    const visivel = $(this).val();
                    const localId = $(this).closest('tr').data('id');

                    $.ajax({
                        url: `/admin/por-onde-projeto-passou/${localId}/updateVisivel/${visivel}`,
                        type: "GET",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        contentType: false,
                        processData: false,
                        global: true,
                        beforeSend: function () {
                            showLoading();
                        },
                        success: function (data) {
                            showNotification("Salvo com sucesso");
                        },
                        error: function (error) {
                            console.log(error);
                            showNotification("Erro ao salvar", "error");
                        },
                        complete: function () {
                            hideLoading();
                        },
                    });
                })
            })
        </script>

    @endpush
</x-app-layout>

<x-modal title="Deletar" id="confirm-delete" show="">
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

