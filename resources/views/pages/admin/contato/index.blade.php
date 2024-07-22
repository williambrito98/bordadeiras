<x-app-layout>
    @section('content_header')
        <h1>Contato</h1>
    @stop

    @section('content')
        <div>
            <form action="{{ route('admin.contato.update') }}" method="post"
                  class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6" id="form">
                @csrf
                @method('PUT')
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                       aria-label="Email" value="{{ $contato->email }}"
                                       aria-describedby="basic-addon1">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-instagram"></i> Instagram</label>
                            <input type="text" id="instagram" name="instagram" class="form-control"
                                   placeholder="Instagram"
                                   aria-label="Instagram" value="{{ $contato->instagram }}">

                            <x-input-error class="mt-2" :messages="$errors->get('instagram')"/>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-facebook"></i> Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control" placeholder="Facebook"
                                   aria-label="Facebook" value="{{ $contato->facebook }}">
                            <x-input-error class="mt-2" :messages="$errors->get('facebook')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="basic-url">Whatsapp</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="whatsapp">https://wa.me/</span>
                                </div>
                                <input type="text" placeholder="Whatsapp" class="form-control" id="whatsapp"
                                       value="{{ $contato->whatsapp }}" name="whatsapp"
                                       aria-describedby="basic-addon3">
                                <x-input-error class="mt-2" :messages="$errors->get('whatsapp')"/>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <label for="instagram"><i class="fab fa-youtube"></i> Youtube</label>
                            <input type="text" id="youtube" name="youtube" class="form-control" placeholder="Youtube"
                                   aria-label="Youtube" value="{{ $contato->youtube }}">
                            <x-input-error class="mt-2" :messages="$errors->get('youtube')"/>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="Linkedin"
                                   aria-label="Linkedin" value="{{ $contato->linkedin }}">
                            <x-input-error class="mt-2" :messages="$errors->get('linkedin')"/>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <x-adminlte-button class="btn" type="submit" label="Salvar" theme="success"
                                           icon="fas fa-lg fa-save"/>
                    </div>

                </div>

            </form>
        </div>
    @stop

</x-app-layout>
