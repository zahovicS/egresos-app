<?php

namespace App\Helpers;

class CrypterHelper
{

    private string $key;
    private string $method = "AES-256-CBC";
    private int $option = 0;
    private string $iv = "1234567891011121";

    function __construct()
    {
        $this->key = _env("APP_KEY") ?? "";
    }

    public function encrypt($data)
    {
        return openssl_encrypt($data, $this->method, $this->key, $this->option, $this->iv);
    }

    public function decrypt($data)
    {
        return openssl_decrypt($data, $this->method, $this->key, $this->option, $this->iv);
    }
}
