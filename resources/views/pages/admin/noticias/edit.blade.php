<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.noticias.index') }}">Noticias</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $noticia->title }}</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <form action="{{ route('admin.noticias.update' , ['noticia' => $noticia->id]) }}" method="post"
              enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="p-4 bg-white shadow">
                <div class="row">
                    <div class="col-md-6">
                        <x-adminlte-input name="title" label="Título" value="{{ old('title') ?? $noticia->title }}"
                                          placeholder="Título" disable-feedback required/>
                        <x-input-error class="mt-2" :messages="$errors->get('title')"/>
                    </div>


                    <div class="col-md-6">
                        <x-adminlte-input name="site_url" label="Site URL"
                                          value="{{ old('site_url') ?? $noticia->site_url }}"
                                          placeholder="Site URL" disable-feedback required/>
                        <x-input-error class="mt-2" :messages="$errors->get('site_url')"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <x-input-file-upload accept="images/*" :initialFiles="[$noticia->image_url]" id="image_url"
                                             label="Banner" class="w-auto"
                                             :urlAdd="route('admin.noticias.banner.upload', ['noticia' => $noticia->id])"
                                             enableAutoUpload="true"/>
                        <x-input-error class="mt-2" :messages="$errors->get('image_url')"/>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <x-textarea name="subtitle" label="Subtítulo" required
                                    content="{{ old('subtitle') ?? $noticia->subtitle }}"/>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ route('admin.noticias.index') }}" class="btn btn-light mx-2 border">Voltar</a>
                    <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                       icon="fas fa-lg fa-save"/>
                </div>

            </div>
        </form>
    @stop

</x-app-layout>
