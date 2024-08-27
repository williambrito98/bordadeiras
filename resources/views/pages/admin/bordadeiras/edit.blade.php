<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.bordadeiras.index') }}">Bordadeiras</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $bordadeira->nome }}</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <div>
            <form action="{{ route('admin.bordadeiras.update', ['bordadeira' => $bordadeira->id]) }}" method="post"
                  class="mx-auto" id="form">
                @csrf
                @method('PUT')
                <div class="p-4 bg-white shadow">
                    <div class="row">
                        <div class="col-md-12">
                            <x-adminlte-input name="nome" label="Nome" value="{{ $bordadeira->nome }}"
                                              placeholder="Nome" disable-feedback/>
                            <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            @php
                                $initialFiles = [
                                        [
                                            $bordadeira->thumbnail_url,
                                        ]
                                    ];
                            @endphp
                            <x-input-file-upload accept="images/*" :initialFiles="$initialFiles" id="thumbnail"
                                                 label="Thumbnail" class="w-auto"
                                                 urlAdd="{{ route('admin.bordadeiras.thumbnail.upload', [ 'bordadeira' => $bordadeira->id]) }}"
                                                 urlDelete="{{ route('admin.bordadeiras.thumbnail.delete', ['bordadeira' => $bordadeira->id]) }}"
                                                 enable-auto-upload="true"
                            />

                            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')"/>
                        </div>
                        <div class="col-md-6">
                            @php
                                $initialFiles = [
                                        [
                                           $bordadeira->banner_url,
                                        ]
                                    ];
                            @endphp
                            <x-input-file-upload accept="images/*" :initialFiles="$initialFiles" id="banner"
                                                 label="Banner" class="w-auto" enable-auto-upload="true"
                                                 urlAdd="{{ route('admin.bordadeiras.banner.upload', [ 'bordadeira' => $bordadeira->id]) }}"
                                                 urlDelete="{{ route('admin.bordadeiras.banner.delete', ['bordadeira' => $bordadeira->id]) }}"/>

                            <x-input-error class="mt-2" :messages="$errors->get('banner')"/>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <x-input-file-upload accept="image/*" :initialFiles="$bordadeira->images" id="images"
                                                 label="Imagens" class="w-100" multiple
                                                 url-add="{{ route('admin.bordadeiras.images.upload', [ 'bordadeira' => $bordadeira->id]) }}"
                                                 url-delete="{{ route('admin.bordadeiras.images.delete', ['bordadeira' => $bordadeira->id]) }}"
                                                 enable-auto-upload="true"
                            />
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <x-textarea name="content" label="Descrição" :content="$bordadeira->content"/>
                            <x-input-error class="mt-2" :messages="$errors->get('content')"/>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            {{-- Minimal --}}
                            <x-adminlte-select2 name="estado" id="estado" label="Estado" class="select-estado">
                                @foreach($estados as $estado)
                                    <option
                                        value="{{ $estado->id }}" {{ $bordadeira->cidade->estado->id == $estado->id ? 'selected' : '' }}>{{ $estado->nome }}</option>
                                @endforeach
                            </x-adminlte-select2>
                            <x-input-error class="mt-2" :messages="$errors->get('estado')"/>
                        </div>
                        <div class="col-md-6">
                            {{-- Minimal --}}
                            <x-adminlte-select2 name="cidade" id="cidade" label="Cidade"
                                                data-url-search="{{ url('admin/estado/{estado}/cidades') }}">
                                @foreach($cidades as $cidade)
                                    <option
                                        value="{{ $cidade->id }}" {{ $bordadeira->cidade->id == $cidade->id ? 'selected' : '' }}>{{ $cidade->nome }}</option>
                                @endforeach
                                <x-input-error class="mt-2" :messages="$errors->get('cidade')"/>
                            </x-adminlte-select2>
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
                                       aria-label="Email" value="{{ $bordadeira->email }}"
                                       aria-describedby="basic-addon1">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-instagram"></i> Instagram</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="instagram">@</span>
                                </div>
                                <input type="text" id="instagram" name="instagram" class="form-control"
                                       placeholder="Instagram"
                                       aria-label="Instagram" value="{{ $bordadeira->instagram }}">

                                <x-input-error class="mt-2" :messages="$errors->get('instagram')"/>
                            </div>

                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-facebook"></i> Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook"
                                   aria-label="Facebook" value="{{ $bordadeira->facebook }}">
                            <x-input-error class="mt-2" :messages="$errors->get('facebook')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="basic-url">Whatsapp</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="whatsapp">https://wa.me/</span>
                                </div>
                                <input type="text" placeholder="Whatsapp" class="form-control" id="whatsapp"
                                       value="{{ $bordadeira->whatsapp }}" name="whatsapp"
                                       aria-describedby="basic-addon3">
                                <x-input-error class="mt-2" :messages="$errors->get('whatsapp')"/>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-youtube"></i> Youtube</label>
                            <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Youtube"
                                   aria-label="Youtube" value="{{ $bordadeira->youtube }}">
                            <x-input-error class="mt-2" :messages="$errors->get('youtube')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Linkedin"
                                   aria-label="Linkedin" value="{{ $bordadeira->linkedin }}">
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
