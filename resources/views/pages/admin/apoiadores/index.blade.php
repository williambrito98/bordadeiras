<x-app-layout>
    @section('content_header')
        <h1>Apoiadores</h1>
    @stop

    @section('content')
        <form action="" method="post" class="mx-auto" id="form"
              enctype="multipart/form-data">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="row mt-5">
                    <div class="col-md-12">
                        @php
                            $initialFiles = array_map(function ($incentivador) {
                                return $incentivador['logo_url'];
                            }, $apoiadores->incentivadores);
                            $inputValue = array_map(function ($incentivador) {
                                return $incentivador['site_url'];
                            }, $apoiadores->incentivadores);
                        @endphp
                        <x-input-file-upload showInput="true" :input-value="$inputValue"
                                             accept="images/*" :initialFiles="$initialFiles"
                                             id="incentivadores"
                                             label="Incentivadores" class="w-auto"
                                             multiple="true"
                                             enableAutoUpload="true"
                                             urlAdd="{{ route('admin.apoiadores.incentivadores.upload') }}"
                                             url-delete="{{ route('admin.apoiadores.incentivadores.delete') }}"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        @php
                            $initialFiles = array_map(function ($patrocinador) {
                                return $patrocinador['logo_url'];
                            }, $apoiadores->patrocinadores);
                            $inputValue = array_map(function ($patrocinador) {
                                return $patrocinador['site_url'];
                            }, $apoiadores->patrocinadores);
                        @endphp
                        <x-input-file-upload showInput="true" :input-value="$inputValue"
                                             accept="images/*" :initialFiles="$initialFiles"
                                             id="patrocinadores"
                                             label="Patrocinadores" class="w-auto"
                                             multiple="true"
                                             enableAutoUpload="true"
                                             urlAdd="{{ route('admin.apoiadores.patrocinadores.upload') }}"
                                             url-delete="{{ route('admin.apoiadores.patrocinadores.delete') }}"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        @php
                            $initialFiles = array_map(function ($parceiro) {
                                return $parceiro['logo_url'];
                            }, $apoiadores->parceiros);
                            $inputValue = array_map(function ($parceiro) {
                                return $parceiro['site_url'];
                            }, $apoiadores->parceiros);
                        @endphp
                        <x-input-file-upload showInput="true" :input-value="$inputValue"
                                             accept="images/*" :initialFiles="$initialFiles"
                                             id="parceiros"
                                             label="Parceiros" class="w-auto"
                                             multiple="true"
                                             enableAutoUpload="true"
                                             urlAdd="{{ route('admin.apoiadores.parceiros.upload') }}"
                                             url-delete="{{ route('admin.apoiadores.parceiros.delete') }}"/>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        @php
                            $initialFiles = array_map(function ($realizador) {
                                return $realizador['logo_url'];
                            }, $apoiadores->realizadores);
                            $inputValue = array_map(function ($realizador) {
                                return $realizador['site_url'];
                            }, $apoiadores->realizadores);
                        @endphp
                        <x-input-file-upload showInput="true" :input-value="$inputValue"
                                             accept="images/*" :initialFiles="$initialFiles"
                                             id="realizadores"
                                             label="Realizadores" class="w-auto"
                                             multiple="true"
                                             enableAutoUpload="true"
                                             urlAdd="{{ route('admin.apoiadores.realizadores.upload') }}"
                                             url-delete="{{ route('admin.apoiadores.realizadores.delete') }}"/>
                    </div>
                </div>
            </div>
        </form>
    @stop
</x-app-layout>
