<?php

function base_url(string $path = ""):string
{
    return _env("BASE_URL") ?? "/";
}

function assets_path(string $asset = ""): string
{
    $paths = MvcConfig("paths");
    return base_url() . $paths["assets"] . "/" . $asset;
}
