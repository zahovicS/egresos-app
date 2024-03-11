<?php

namespace App\Services\Categorias;

use App\Helpers\HTMLHelper;
use App\Models\Categoria;
use App\Services\Service;
use Exception;

class CategoriaService extends Service
{
    function __construct()
    {
        parent::__construct();
    }
    public function categoriaDataTable(array $request)
    {
        $pageNumber = ($request["start"] / $request["length"]) + 1;
        $pageLength = $request["length"];
        $skip       = ($pageNumber - 1) * $pageLength;

        // get data froms table
        $query = Categoria::select('*');
        // Search
        $search = $request["descripcion"] ?? "";
        $query = $query->where(function ($query) use ($search) {
            $query->when($search != "", function ($filter) use ($search) {
                dd($search);
                $filter->where("descripcion", 'like', "%" . $search . "%");
            });
        });
        $query = $query->orderBy("descripcion", "ASC");
        $recordsFiltered = $recordsTotal = $query->count();
        $rows = $query->skip($skip)->take($pageLength)->get();
        $result = [];
        foreach ($rows as $key => $row) {
            $is_delete = $row->estado == "0";
            $menu = [
                "edit" => [
                    "type" => "a",
                    "title" => "Editar",
                    "href" => "/categorias/editar/" . $this->crypter->encrypt($row->id),
                    "icon" => "fas fa-pen",
                ],
                "desactivate" => [
                    "type" => "a",
                    "title" => "Desactivar",
                    "href" => "/categorias/desactivar/" . $this->crypter->encrypt($row->id),
                    "icon" => "fas fa-ban"
                ],
                "activate" => [
                    "type" => "a",
                    "title" => "Activar",
                    "href" => "/categorias/activar/" . $this->crypter->encrypt($row->id),
                    "icon" => "fas fa-redo"
                ]
            ];
            $buttons = HTMLHelper::generarDropdown($menu, $is_delete, [
                "custom_class" => "btn-sm"
            ]);
            $result[$key] = [
                "key" => $key + 1,
                "descripcion" => $row->descripcion,
                "estado" => $row->estado == "1" ? "Activo" : "Desactivado",
                "opciones" => $buttons,
            ];
        }
        return ["draw" => $request["draw"], "recordsTotal" => $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $result];
    }

    public function validarGuardar(array $data)
    {
        $validacion = form()->validate($data, [
            "nombre_categoria" => "required|text|min:5|max:40"
        ]);
        if (!$validacion) {
            throw new Exception($this->procesarErrores(form()->errors()), 1);
        }
    }
    public function verificarQueExisteUnaCategoria(array $data, ?int $ignore_id = null)
    {
        $existe = Categoria::where("descripcion", "like", "%{$data["nombre_categoria"]}%")
            ->when($ignore_id, function ($existQuery) use ($ignore_id) {
                $existQuery->where("id", "!=", $ignore_id);
            })
            ->exists();
        if ($existe) {
            throw new Exception("La categoría <b>{$data["nombre_categoria"]}</b> ya existe.", 1);
        }
    }
    public function guardarCategoria(array $data)
    {
        $this->validarGuardar($data);
        $this->verificarQueExisteUnaCategoria($data);
        $categoria = new Categoria();
        $categoria->descripcion = $data["nombre_categoria"];
        $categoria->save();
    }
    public function obtenerCategoria(string $encriptedId)
    {
        $categoria = Categoria::find($this->crypter->decrypt($encriptedId));
        if (!$categoria) {
            throw new Exception("La categoría no existe o clave mal encriptada.", 1);
        }
        return $categoria;
    }
    public function actualizarCategoria(string $encriptedId, array $data)
    {
        $this->validarGuardar($data);
        $categoria = $this->obtenerCategoria($encriptedId);
        $this->verificarQueExisteUnaCategoria($data, $categoria->id);
        $categoria->descripcion = $data["nombre_categoria"];
        $categoria->save();
    }
    public function desactivarCategoria(string $encriptedId)
    {
        $categoria = $this->obtenerCategoria($encriptedId);
        $categoria->estado = "0";
        $categoria->save();
    }
    public function activarCategoria(string $encriptedId)
    {
        $categoria = $this->obtenerCategoria($encriptedId);
        $categoria->estado = "1";
        $categoria->save();
    }
}
