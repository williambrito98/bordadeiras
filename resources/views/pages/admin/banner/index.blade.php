<x-app-layout>
    @section('content_header')
        <h1>Banner</h1>
    @stop

    @section('content')
        <form action="" method="post" class="mx-auto" id="form" enctype="multipart/form-data">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="row mt-5">
                    <div class="col-md-12">
                        @php
                            $initialFiles = [$banner->img_url ?? ''];
                        @endphp
                        <x-input-file-upload showInput="false" :input-value="$initialFiles" accept="image/*" :initialFiles="$initialFiles"
                            id="img_url" class="w-auto" enableAutoUpload="true"
                            urlAdd="{{ route('admin.banner.upload') }}" url-delete="{{ route('admin.banner.delete') }}" />
                    </div>
                </div>

            </div>
        </form>
    @stop
</x-app-layout>
