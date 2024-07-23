<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo Usuário</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <form action="{{ route('admin.users.store') }}" method="post">
            @csrf
            <div class="p-4 bg-white shadow">
                <div class="row">
                    <div class="col-md-6">
                        <x-adminlte-input name="name" label="Nome" value="{{ old('name') }}"
                                          placeholder="Nome" disable-feedback required/>
                        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
                    </div>
                    <div class="col-md-6">
                        <x-adminlte-input name="email" label="Email" type="email" value="{{ old('email') }}"
                                          placeholder="Email" disable-feedback required/>
                        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <x-adminlte-input name="password" label="Senha" type="password"
                                          placeholder="Senha" disable-feedback required/>
                        <x-input-error class="mt-2" :messages="$errors->get('password')"/>
                    </div>

                    <div class="col-md-6">
                        <x-adminlte-input name="password_confirmation" label="Confirmação de Senha" type="password"
                                          placeholder="Confirmação de Senha" disable-feedback required/>
                        <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')"/>
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
