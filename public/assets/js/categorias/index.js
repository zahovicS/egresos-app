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
            data: function (data) {
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
            targets: [2, 3],
            width: '150px'
        }
        ],
    })
}
const init = () => {
    cargarDataTableCategorias();
}
ready(function () {
    init();
})
