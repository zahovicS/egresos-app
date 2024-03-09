<?php

namespace App\Controllers\Categorias;
use App\Controllers\Controller;

class CategoriaController extends Controller
{
    public function index()
    {
        auth()->guard('auth');
        return render('pages.categorias.index');
    }
}
