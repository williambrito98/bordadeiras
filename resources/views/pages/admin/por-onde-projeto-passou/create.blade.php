<x-app-layout>
    @section('content_header')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.por-onde-projeto-passou.index') }}">Por Onde Projeto Passou</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
            </ol>
        </nav>
    @stop

    @section('content')
        <form action="{{ route('admin.por-onde-projeto-passou.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="p-4 bg-white shadow">
                <div class="row">
                    <div class="col-md-2">
                        {{-- Minimal --}}
                        <x-adminlte-select2 required name="tipo" id="tipo" label="Tipo">
                            <option {{ !$errors->get('iframe_url') && !$errors->get('src') ? 'selected': '' }} value="">Selecione</option>
                            <option {{ $errors->get('iframe_url') ? 'selected' : '' }} value="youtube">Youtube</option>
                            <option {{ $errors->get('src') ? 'selected' : '' }} value="imagem">Imagem</option>
                        </x-adminlte-select2>
                        <x-input-error class="mt-2" :messages="$errors->get('tipo')"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 youtubeContainer">
                        <x-adminlte-input name="iframe_url" label="Link Iframe" value="{{ old('iframe_url') }}"
                                          placeholder="Link Iframe" disable-feedback/>
                        <x-input-error class="mt-2" :messages="$errors->get('iframe_url')"/>
                    </div>

                    <div class="col-md-12 imagemContainer">
                        <x-input-file-upload accept="image/*" :initialFiles="[]" id="src"
                                             label="Imagem" class="w-auto"/>
                        <x-input-error class="mt-2" :messages="$errors->get('src')"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 descriptionContainer">
                        <x-adminlte-input name="description" label="Descrição" value="{{ old('description') }}"
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
