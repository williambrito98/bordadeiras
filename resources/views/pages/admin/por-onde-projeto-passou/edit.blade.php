<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.noticias.index') }}">Por Onde Projeto Passou</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edição</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <form action="{{ route('admin.por-onde-projeto-passou.update', ['por_onde_projeto_passou' => $local->id]) }}"
              method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-4 bg-white shadow">
                <div class="row">
                    <div class="col-md-2">
                        {{-- Minimal --}}
                        <x-adminlte-select2 required name="tipo" id="tipo" label="Tipo">
                            <option {{ !$local->iframe_url && !$local->src ? 'selected': '' }} value="">Selecione
                            </option>
                            <option {{ $local->iframe_url ? 'selected' : '' }} value="youtube">Youtube</option>
                            <option {{ $local->src ? 'selected' : '' }} value="imagem">Imagem</option>
                        </x-adminlte-select2>
                        <x-input-error class="mt-2" :messages="$errors->get('tipo')"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 youtubeContainer">
                        <x-adminlte-input name="iframe_url" label="Link Iframe" value="{{ $local->iframe_url ?? old('iframe_url') }}"
                                          placeholder="Link Iframe" disable-feedback/>
                        <x-input-error class="mt-2" :messages="$errors->get('iframe_url')"/>
                    </div>

                    <div class="col-md-12 imagemContainer">
                        <x-input-file-upload accept="image/*" :initialFiles="[$local->src]" id="file"
                                             label="Imagem" class="w-auto"
                                             urlAdd="{{ route('admin.por-onde-projeto-passou.imagem.upload', [ 'por_onde_projeto_passou' => $local->id]) }}"
                                             enable-auto-upload="true"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 descriptionContainer">
                        <x-adminlte-input name="description" label="Descrição"
                                          value="{{ $local->description ?? old('description') }}"
                                          placeholder="Descrição" disable-feedback/>
                        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
                    </div>
                </div>


                <div class="d-flex justify-content-end mt-5">
                    <a href="{{ route('admin.por-onde-projeto-passou.index') }}" class="btn btn-light mx-2 border">Voltar</a>
                    <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                       icon="fas fa-lg fa-save"/>
                </div>

            </div>
        </form>
    @stop

    @push('js')
        <script>
            $(document).ready(function () {
                    $('#tipo').change(handleTipoChange).change()

                    function handleTipoChange() {
                        const tipo = $(this).val();
                        if (!tipo) {
                            $('.youtubeContainer, .imagemContainer, .descriptionContainer').hide();
                            return true;
                        }
                        if (tipo === 'youtube') {
                            $('.youtubeContainer, .descriptionContainer').show()
                            $('.imagemContainer').hide()
                            return true;
                        }

                        $('.youtubeContainer').hide()
                        $('.imagemContainer, .descriptionContainer').show()

                        return true;

                    }

                }
            )

        </script>
    @endpush

</x-app-layout>
