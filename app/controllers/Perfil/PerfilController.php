<?php

namespace App\Controllers\Perfil;

use App\Controllers\Controller;

class PerfilController extends Controller
{
    public function index()
    {
        return render('pages.perfil.index');
    }
}
