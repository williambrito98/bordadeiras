<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <form action="{{ route('admin.users.update', ['user' => $user->id ]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="p-4 bg-white shadow">
                <div class="row">
                    <div class="col-md-6">
                        <x-adminlte-input name="name" label="Nome" value="{{ $user->name }}"
                                          placeholder="Nome" disable-feedback/>
                        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
                    </div>
                    <div class="col-md-6">
                        <x-adminlte-input name="email" label="Email" value="{{ $user->email }}"
                                          placeholder="Email" disable-feedback/>
                        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-light mx-2 border">Voltar</a>
                    <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                       icon="fas fa-lg fa-save"/>
                </div>
            </div>

        </form>
    @stop

</x-app-layout>
