<?php

namespace App\Controllers\Categorias;

use App\Controllers\Controller;
use App\Services\Categorias\CategoriaService;
use Exception;

class CategoriaController extends Controller
{
    protected CategoriaService $categoriaService;
    function __construct()
    {
        parent::__construct();
        $this->categoriaService = new CategoriaService;
    }
    public function index()
    {
        return render('pages.categorias.index');
    }
    public function categoriaDataTable()
    {
        $result = $this->categoriaService->categoriaDataTable($this->request_data);
        return response()->withHeader('Content-Length', strlen(json_encode($result)))->json($result, 200);
    }
    public function crear()
    {
        return render('pages.categorias.crear');
    }
    public function guardar()
    {
        try {
            $this->categoriaService->guardarCategoria($this->request_data);
            flash()->set('info', 'color');
            flash()->set('Categoría guardada correctamente.', 'mensaje');
            return $this->response->redirect("/categorias");
        } catch (Exception $e) {
            flash()->set('danger', 'color');
            flash()->set($e->getMessage(), 'mensaje');
            return $this->response->redirect("/categorias/crear");
        }
    }
    public function editar(string $encriptedId)
    {
        try {
            $data = $this->categoriaService->obtenerCategoria($encriptedId);
            return render('pages.categorias.editar', ["categoria" => $data, "encriptedId" => $encriptedId]);
        } catch (Exception $e) {
            flash()->set('danger', 'color');
            flash()->set($e->getMessage(), 'mensaje');
            return $this->response->redirect("/categorias");
        }
    }
    public function actualizar(string $encriptedId)
    {
        try {
            $data = $this->categoriaService->actualizarCategoria($encriptedId, $this->request_data);
            flash()->set('info', 'color');
            flash()->set('Categoría editada correctamente.', 'mensaje');
            return $this->response->redirect("/categorias");
        } catch (Exception $e) {
            flash()->set('danger', 'color');
            flash()->set($e->getMessage(), 'mensaje');
            return $this->response->redirect("/categorias/editar/{$encriptedId}");
        }
    }
    public function desactivar(string $encriptedId)
    {
        try {
            $data = $this->categoriaService->desactivarCategoria($encriptedId);
            flash()->set('info', 'color');
            flash()->set('Categoría desactivada correctamente.', 'mensaje');
            return $this->response->redirect("/categorias");
        } catch (Exception $e) {
            flash()->set('danger', 'color');
            flash()->set($e->getMessage(), 'mensaje');
            return $this->response->redirect("/categorias");
        }
    }
    public function activar(string $encriptedId)
    {
        try {
            $data = $this->categoriaService->activarCategoria($encriptedId);
            flash()->set('info', 'color');
            flash()->set('Categoría activada correctamente.', 'mensaje');
            return $this->response->redirect("/categorias");
        } catch (Exception $e) {
            flash()->set('danger', 'color');
            flash()->set($e->getMessage(), 'mensaje');
            return $this->response->redirect("/categorias");
        }
    }
}
