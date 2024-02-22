<?php
return [
    ["header" => "administracion"],
    [
        "url" => "/",
        "text" => "Inicio",
        "icon" => "ri-speed-up-line"
    ],
    [
        "text" => "Categorias",
        "icon" => "ri-archive-drawer-line",
        "submenu" => [
            [
                "url" => "/asdsada",
                "text" => "Registrar proyecto",
            ],
            [
                "url" => "/proyectos/ver-proyectos",
                "text" => "Ver proyectos",
            ],
        ],
    ],
];
