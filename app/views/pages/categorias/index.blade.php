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
    <script>
        let $tblCategorias = null;
        const cargarDataTableCategorias = () => {
            $tblCategorias = $("#tblCategorias").DataTable({
                dom: `<t<'.container-fluid'<'.row'<'.col-md-6 px-0 mt-2'i><'.col-md-6 px-0 mt-2 d-flex justify-content-end'p>>>>`,
                // orderCellsTop: false,
                // fixedHeader: true,
                // responsive: true,
                autowidth: false,
                destroy: true,
                order: [],
                // language: DEFAULT_ES_DATATABLE,
                // scrollX: true,
                processing: true,
                serverSide: true,
                deferRender: true,
                ajax: {
                    url: "/categorias/categoriaDataTable",
                    data: function(data) {
                        data.descripcion = "";
                    },
                },
                columns: [{
                        data: 'key',
                        orderable: false,
                        responsivePriority: 9,
                    },
                    {
                        data: 'descripcion',
                        orderable: false,
                        responsivePriority: 1,
                    },
                    {
                        data: 'estado',
                        className: "text-center",
                        orderable: false,
                        responsivePriority: 4,
                    },
                    {
                        data: 'opciones',
                        orderable: false,
                        className: "text-center",
                        responsivePriority: 1,
                    },
                ],
                columnDefs: [{
                        targets: [0],
                        width: '50px'
                    },
                    {
                        targets: [2,3],
                        width: '150px'
                    }
                ],
            })
        }
        const init = () => {
            cargarDataTableCategorias();
        }
        document.addEventListener('DOMContentLoaded', function() {
            init();
        });
    </script>
@endsection
