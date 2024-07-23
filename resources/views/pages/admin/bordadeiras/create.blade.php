<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nova Bordadeira</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <div>
            <form action="{{ route('admin.bordadeiras.store') }}" method="post" class="mx-auto" id="form"
                  enctype="multipart/form-data">
                @csrf
                <div class="p-4 bg-white shadow">
                    <div class="row">
                        <div class="col-md-12">
                            <x-adminlte-input name="nome" label="Nome" required value="{{ old('nome') }}"
                                              placeholder="Nome" disable-feedback/>
                            <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <x-input-file-upload accept="images/*" :initialFiles="[]" id="thumbnail"
                                                 label="Thumbnail" class="w-auto"/>

                            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')"/>
                        </div>
                        <div class="col-md-6">
                            <x-input-file-upload accept="images/*" :initialFiles="[]" id="banner"
                                                 label="Banner" class="w-auto"/>

                            <x-input-error class="mt-2" :messages="$errors->get('banner')"/>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <x-input-file-upload accept="image/*" :initialFiles="[]" id="images"
                                                 label="Imagens" class="w-100" multiple/>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <x-textarea name="content" label="Descrição" required>
                                {{ old('content') ?? ''}}
                            </x-textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content')"/>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            {{-- Minimal --}}
                            <x-adminlte-select2 required name="estado" id="estado" label="Estado" class="select-estado">
                                <option value="" selected>Selecione</option>
                                @foreach($estados as $estado)
                                    <option
                                        value="{{ $estado->id }}">{{ $estado->nome }}</option>
                                @endforeach
                            </x-adminlte-select2>
                            <x-input-error class="mt-2" :messages="$errors->get('estado')"/>
                        </div>
                        <div class="col-md-6">
                            {{-- Minimal --}}
                            <x-adminlte-select2 required name="cidade" id="cidade" label="Cidade"
                                                data-url-search="{{ url('admin/estado/{estado}/cidades') }}">
                            </x-adminlte-select2>
                            <x-input-error class="mt-2" :messages="$errors->get('cidade')"/>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                       aria-label="Email"
                                       aria-describedby="basic-addon1">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-instagram"></i> Instagram</label>
                            <input type="text" id="instagram" name="instagram" class="form-control"
                                   placeholder="Instagram"
                                   aria-label="Instagram">

                            <x-input-error class="mt-2" :messages="$errors->get('instagram')"/>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-facebook"></i> Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook"
                                   aria-label="Facebook">
                            <x-input-error class="mt-2" :messages="$errors->get('facebook')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="basic-url">Whatsapp</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="whatsapp">https://wa.me/</span>
                                </div>
                                <input type="text" placeholder="Whatsapp" class="form-control" id="whatsapp"
                                       name="whatsapp"
                                       aria-describedby="basic-addon3">
                                <x-input-error class="mt-2" :messages="$errors->get('whatsapp')"/>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-youtube"></i> Youtube</label>
                            <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Youtube"
                                   aria-label="Youtube">
                            <x-input-error class="mt-2" :messages="$errors->get('youtube')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Linkedin"
                                   aria-label="Linkedin">
                            <x-input-error class="mt-2" :messages="$errors->get('linkedin')"/>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <a href="{{ route('admin.bordadeiras.index') }}" class="btn btn-light mx-2 border">Voltar</a>
                        <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                           icon="fas fa-lg fa-save"/>
                    </div>

                </div>

            </form>
        </div>
    @stop
</x-app-layout>
