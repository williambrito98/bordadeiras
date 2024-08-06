<x-app-layout>
    @section('content_header')
        <h1>SEO</h1>
    @stop

    @section('content')
        <div>
            <form action="{{ route('admin.seo.store') }}" method="post"
                  class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6" id="form">
                @csrf
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h4><i class="fas fa-wrench"></i> Configurações</h4>
                    <br>
                    <div class="row">
                        <x-adminlte-input name="title" label="Título" :value="$seo?->title" placeholder="Título"
                                          fgroup-class="col-md-6"/>
                        <x-adminlte-input name="description" label="Descrição" :value="$seo?->description"
                                          placeholder="Descrição"
                                          fgroup-class="col-md-6"/>
                    </div>

                    <div class="row">
                        <x-adminlte-input name="keywords" label="Palavras-chave" :value="$seo?->keywords"
                                          placeholder="Palavras-chave"
                                          fgroup-class="col-md-6"/>
                        <x-adminlte-input name="author" label="Autor" placeholder="Autor" :value="$seo?->author"
                                          fgroup-class="col-md-3"/>
                        <x-adminlte-input name="robots" label="Robots" placeholder="Robots" :value="$seo?->robots"
                                          fgroup-class="col-md-3"/>
                    </div>
                </div>

                <div class="p-4 sm:p-8 my-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h4><i class="fab fa-facebook"></i> Facebook</h4>
                    <br>

                    <div class="row">
                        <x-adminlte-input name="og_title" label="Título" placeholder="Título" :value="$seo?->og_title"
                                          fgroup-class="col-md-6"/>
                        <x-adminlte-input name="og_description" label="Descrição" placeholder="Descrição"
                                          :value="$seo?->og_description"
                                          fgroup-class="col-md-6"/>
                    </div>

                    <div class="row">
                        <x-adminlte-input name="og_url" label="Página URL" placeholder="Página URL"
                                          :value="$seo?->og_url"
                                          fgroup-class="col-md-6"/>

                        <div class="col-md-6">
                            <x-input-file-upload accept="images/*" :initialFiles="[$seo->og_image]"
                                                 id="og_image"
                                                 name="file"
                                                 label="Imagem" class="w-auto"
                                                 urlAdd="{{ route('admin.seo.facebook.imagem.upload') }}"
                                                 enableAutoUpload="true"/>
                        </div>
                    </div>
                </div>


                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <h4><i class="fab fa-twitter"></i> Twitter</h4>

                    <br>

                    <div class="row">
                        <x-adminlte-input name="twitter_card" label="Sumário" placeholder="Sumário"
                                          :value="$seo?->twitter_card"
                                          fgroup-class="col-md-6"/>
                        <x-adminlte-input name="twitter_title" label="Título" placeholder="Título"
                                          :value="$seo?->twitter_title"
                                          fgroup-class="col-md-6"/>
                    </div>

                    <div class="row">
                        <x-adminlte-input name="twitter_description" label="Descrição" placeholder="Descrição"
                                          :value="$seo?->twitter_description"
                                          fgroup-class="col-md-6"/>
                        <x-adminlte-input name="twitter_title" label="Título" placeholder="Título"
                                          :value="$seo?->twitter_title"
                                          fgroup-class="col-md-6"/>
                    </div>

                    <div class="row">
                        <x-input-file-upload accept="images/*" :initialFiles="[$seo->twitter_image]"
                                             id="twitter_image"
                                             name="file"
                                             label="Imagem" class="w-auto"
                                             urlAdd="{{ route('admin.seo.twitter.imagem.upload') }}"
                                             enableAutoUpload="true"/>
                        <x-adminlte-input name="twitter_site" label="Usuário" placeholder="Usuário"
                                          :value="$seo?->twitter_site"
                                          fgroup-class="col-md-6"/>
                    </div>

                </div>


                <div class="d-flex justify-content-end py-5">
                    <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                       icon="fas fa-lg fa-save"/>
                </div>

            </form>
        </div>
    @stop

</x-app-layout>
