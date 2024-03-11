@extends('layouts.master')

@section('content')
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info"><img class="user-img" src="{{ assets(auth()->user()['profile']) }}">
                    <h4>{{ auth()->user()['fullname'] }}</h4>
                    <p>&#64;{{ auth()->user()['username'] }}</p>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-12 pt-4">
            <form class="card" action="/perfil/editar" autocomplete="off">
                <div class="card-header">
                    <h5 class="card-title mb-0">Editar Pefil</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label for="input_user_nombre" class="form-label">Nombre completo</label>
                                        <input type="text" class="form-control" name="input_user_nombre" id="input_user_nombre" placeholder="Jhon Doe" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label for="input_user_username" class="form-label">Nombre de usuario</label>
                                        <input type="text" class="form-control" name="input_user_username" id="input_user_username" placeholder="@HitchiIO" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label for="input_user_correo" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" name="input_user_correo" id="input_user_correo" placeholder="jhon@devio.ai" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label for="input_user_contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" name="input_user_contrasena" id="input_user_contrasena" required autocomplete="off" aria-describedby="contrasenaHelp">
                                        <div id="contrasenaHelp" class="form-text">Min: 5 carácteres, entre mayusculas y minusculas.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <img src="{{ assets(auth()->user()['profile']) }}" id="profile-image-placeholder" class="img-thumbnail" alt="user profile">
                            <div class="my-2">
                                <input class="form-control" type="file" name="input_user_foto" id="input_user_foto">
                              </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary"><i class="ri-edit-2-line"></i> Editar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
