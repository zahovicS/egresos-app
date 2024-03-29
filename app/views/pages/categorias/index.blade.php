@extends('layouts.master')

@section('title', 'Lista de categorías')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <h5>Lista de categorias</h5>
                    <a href="/categorias/crear" class="btn btn-sm btn-primary"><i class="ri-add-line"></i> Crear caategoría</a>
                </div>
            </h5>
            <div class="container-fluid px-0 pts-2">
                <table class="table table-bordered" id="tblCategorias">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ assets_path('js/categorias/index.js') }}"></script>
@endsection
