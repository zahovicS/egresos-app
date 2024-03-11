<?php

function base_url(string $path = ""): string
{
    $url = _env("BASE_URL") ?? "/";
    return "{$url}{$path}";
}

function assets_path(string $asset = ""): string
{
    $paths = MvcConfig("paths");
    return base_url() . $paths["assets"] . "/" . $asset;
}
