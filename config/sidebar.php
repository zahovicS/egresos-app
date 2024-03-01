<?php
return [
    // ["header" => "administracion"],
    [
        "url" => "/dashboard",
        "text" => "Inicio",
        "icon" => "ri-speed-up-line"
    ],
    [
        "url" => "/categorias",
        "text" => "Categorias",
        "icon" => "ri-price-tag-3-fill"
    ],
    [
        "url" => "/cuentas",
        "text" => "Cuentas",
        "icon" => "ri-wallet-2-line"
    ],
    [
        "text" => "Transacciones",
        "icon" => "ri-arrow-left-right-line",
        "submenu" => [
            [
                "url" => "/asdsada",
                "text" => "Nueva transacción",
            ],
            [
                "url" => "/proyectos/ver-proyectos",
                "text" => "Transacciones",
            ],
        ],
    ],
];
