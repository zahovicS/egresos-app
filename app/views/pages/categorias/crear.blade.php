@extends('layouts.master')

@section('title', 'Crear categoría')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Agregar nueva categoría</h5>
            <form action="/categorias/guardar" method="POST">
                <div class="mb-3">
                    <label for="nombre_categoria" class="form-label">Descripción de la Categoría *</label>
                    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" autofocus>
                </div>
                <div class="w-100 text-end">
                    <a href="/categorias" class="btn btn-secondary"><i class="ri-arrow-left-line"></i> Atras</a>
                    <button type="reset" class="btn btn-secondary"><i class="ri-eraser-line"></i> Reiniciar</button>
                    <button type="submit" class="btn btn-primary"><i class="ri-save-2-line"></i> Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
