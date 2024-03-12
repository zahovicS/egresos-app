@extends('layouts.master')

@section('title', 'Lista de cuentas')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <div class="w-100 d-flex justify-content-between align-items-center">
                    <h5>Lista de cuentas</h5>
                    <a href="/cuentas/crear" class="btn btn-sm btn-primary"><i class="ri-add-line"></i> Crear cuenta</a>
                </div>
            </h5>
            <div class="container-fluid px-0 pts-2">
                <table class="table table-bordered" id="tblCuentas">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre de la cuenta</th>
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
    <script src="{{ assets_path('js/cuentas/index.js') }}"></script>
@endsection
