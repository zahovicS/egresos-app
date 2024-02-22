<?php

function getMenu(): array
{
    return processMenu(app()->config("sidebar"));
}
function processMenu(array $menu): array
{
    $match = app()->getCurrentUri();
    for ($i = 0; $i < count($menu); $i++) {
        $item = $menu[$i];
        if (isSubmenu($item)) {
            $menu[$i]["submenu_class"] = "";
            for ($j = 0; $j < count($item["submenu"]); $j++) {
                $subitem = $item["submenu"][$j];
                if ($subitem["url"] === $match) {
                    $menu[$i]["submenu_class"] = "is-expanded";
                    $menu[$i]["submenu"][$j]["class"] = "active";
                }
            }
        } else if (isLink($item)) {
            $menu[$i]["class"] = "";
            if ($menu[$i]["url"] === $match) {
                $menu[$i]["class"] = "active";
            }
        }
    }
    return $menu;
}
function isHeader($item)
{
    return is_string($item) || isset($item['header']);
}
function isSubmenu($item)
{
    return isset($item['text'], $item['submenu']) &&
        is_array($item['submenu']);
}
function isLink($item)
{
    return isset($item['text']) && (isset($item['url']));
}
