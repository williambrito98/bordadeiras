<x-app-layout>
    @section('content_header')
        <h1>Nossa História</h1>
    @stop


    @section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.nossa-historia.update') }}" id="form" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @foreach($nossaHistoria as $key => $ns)
                <input type="hidden" name="id[]" value="{{ $ns->id }}">
                <div class="p-4 my-5 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h4>Seção: {{ $ns->title }}</h4>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <x-input-label label="Titulo">
                                <x-slot name="value">Titulo</x-slot>
                            </x-input-label>
                            <x-text-input placeholder="Titulo" class="form-control" label="Titulo" name="title[]"
                                          value="{{ old('title[]') ?? $ns->title }}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('title')"/>
                        </div>

                        <div class="col-md-6">
                            <x-input-label label="Sub-Título">
                                <x-slot name="value">Sub-Título</x-slot>
                            </x-input-label>
                            <x-text-input placeholder="Sub Título" class="form-control" label="Sub Título"
                                          name="subtitle[]"
                                          value="{{ old('subtitle[]') ?? $ns->subtitle }}"/>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <x-input-file-upload accept="images/*" :initialFiles="[$ns->thumbnail]"
                                                 id="thumbnail-{{$ns->id}}"
                                                 name="thumbnail-{{$ns->id}}"
                                                 label="Thumbnail" class="w-auto"
                                                 urlAdd="{{ route('admin.nossa-historia.thumbnail.upload', ['nossaHistoria' => $ns->id]) }}"
                                                 urlDelete="{{ route('admin.nossa-historia.thumbnail.delete', ['nossaHistoria' => $ns->id]) }}"
                                                 enableAutoUpload="true"/>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <x-textarea label="Conteudo" content="{{ old('content[]') ?? $ns->content }}"
                                        id="content-{{$ns->id}}"
                                        name="content[]"/>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="email" id="email" name="email[]" class="form-control" placeholder="Email"
                                       aria-label="Email" value="{{ $ns->email }}"
                                       aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-instagram"></i> Instagram</label>
                            <input type="text" id="instagram" name="instagram[]" class="form-control"
                                   placeholder="Instagram"
                                   aria-label="Instagram" value="{{ $ns->instagram }}">

                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-facebook"></i> Facebook</label>
                            <input type="text" id="facebook" name="facebook[]" class="form-control" placeholder="Facebook"
                                   aria-label="Facebook" value="{{ $ns->facebook }}">
                        </div>
                        <div class="col-md-6">
                            <label for="basic-url">Whatsapp</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="whatsapp">https://wa.me/</span>
                                </div>
                                <input type="text" placeholder="Whatsapp" class="form-control" id="whatsapp"
                                       value="{{ $ns->whatsapp }}" name="whatsapp[]"
                                       aria-describedby="basic-addon3">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-youtube"></i> Youtube</label>
                            <input type="text" id="youtube" name="youtube[]" class="form-control" placeholder="Youtube"
                                   aria-label="Youtube" value="{{ $ns->youtube }}">
                        </div>
                        <div class="col-md-6">
                            <label for="instagram">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin[]" class="form-control" placeholder="Linkedin"
                                   aria-label="Linkedin" value="{{ $ns->linkedin }}">
                        </div>
                    </div>

                </div>
            @endforeach

            <div class="d-flex justify-content-end py-5">
                <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                   icon="fas fa-lg fa-save"/>
            </div>
        </form>
    @stop
</x-app-layout>
