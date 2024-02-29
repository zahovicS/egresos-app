@extends('layouts.auth')

@section('content')
    <section class="login-content">
        <div class="logo">
            <h1>{{ _env("APP_NAME", "Sistema") }}</h1>
        </div>
        <div class="login-box">
            <form class="login-form" action="/auth/login" method="post" autocomplete="off">
                <h3 class="login-head"><i class="bi bi-person me-2"></i>Inicia sesión</h3>
                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input class="form-control" type="text" placeholder="usuario" name="username" value="{{ $username ?? '' }}" autocomplete="off" autofocus readonly>
                    <small class="mb-1 text-danger">{{ $errors['username'] ?? ($errors['auth'] ?? null) }}</small>
                </div>
                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input class="form-control" type="password" placeholder="contraseña" name="password" value="{{ $password ?? '' }}" autocomplete="off" readonly>
                    <small class="mb-1 text-danger">{{ $errors['password'] ?? null }}</small>
                </div>
                <div class="mb-3 btn-container d-grid">
                    <button class="btn btn-primary btn-block">
                        <i class="ri-login-box-line"></i> Ingresar</button>
                </div>
            </form>
        </div>
    </section>
@endsection
