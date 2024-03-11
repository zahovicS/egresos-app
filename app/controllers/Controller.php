<?php

namespace App\Controllers;

use App\Helpers\CrypterHelper;

/**
 * This is the base controller for your Leaf MVC Project.
 * You can initialize packages or define methods here to use
 * them across all your other controllers which extend this one.
 */
class Controller extends \Leaf\Controller
{
    public $form;
    public $crypter;
    public $request_data;

    function __construct()
    {
        parent::__construct();
        $this->form = form();
        $this->crypter = new CrypterHelper();
        $this->request_data = $this->request->body(true);
    }
}
