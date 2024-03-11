<?php

namespace App\Services;

use App\Helpers\CrypterHelper;

class Service
{
    public $crypter;
    function __construct()
    {
        $this->crypter = new CrypterHelper();
    }
    public function procesarErrores(array $errores): string
    {
        $result = "";
        foreach ($errores as $key => $error) {
            $txt_key = mb_strtoupper(str_replace("_", " ", $key));
            $result .= "<h6>{$txt_key}</h6>" . PHP_EOL;
            $result .= "<ul>" . PHP_EOL;
            foreach ($error as $text_error) {
                $txt = str_replace("_", " ", $text_error);
                $result .= "<li>{$txt}</li>" . PHP_EOL;
            }
            $result .= "</ul>" . PHP_EOL;
        }
        return $result;
    }
}
