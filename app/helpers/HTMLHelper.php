<?php

namespace App\Helpers;

use Exception;

class HTMLHelper
{

    public static function generarMenu($menu, $is_delete = false)
    {
        $html = '<div class="btn-group w-100">';
        if ($is_delete) {
            $item = $menu["activate"] ?? null;
            if ($item) {
                $html .= self::renderMenuItem($item);
            }
        } else {
            foreach ($menu as $key => $item) {
                if ($key !== "activate") {
                    $html .= self::renderMenuItem($item);
                }
            }
        }
        $html .= '</div>';
        return $html;
    }

    public static function generarDropdown($menus, $is_delete = false, $config = [], $title = "Opciones")
    {
        $customClass = $config["custom_class"] ?? "";
        // $type = $is_delete ? "btn-danger" : "bg-olive";
        $type = $is_delete ? "btn-danger" : "btn-primary";
        $html = "<div class='btn-group w-100'>";
        $html .= "<button type='button' class='btn {$type} {$customClass} w-100 dropdown-toggle' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <i class='fas fa-cog'></i> {$title}
                    </button>";
        $html .= "<ul class='dropdown-menu w-100 dropdown-block'>";
        if ($is_delete) {
            $item = $menus["activate"] ?? null;
            if ($item) {
                $html .= self::renderMenuItem($item, 'dropdown-item');
            }
        } else {
            foreach ($menus as $key => $item) {
                if ($key !== "activate") {
                    $html .= self::renderMenuItem($item, 'dropdown-item');
                }
            }
        }
        $html .= '</ul></div>';
        return $html;
    }
    private static function renderMenuItem($item, $typeMenu = "")
    {
        $href = array_key_exists('href', $item) ? "href='{$item["href"]}'" : "";
        $type = $item["type"] ?? "button"; // a => link | button => button :v
        $typeButton = $type == "button" ? "type='button'" : "";
        $target = array_key_exists('target', $item) ? "target='{$item["target"]}'" : "";
        $title = $item["title"] ?? false;
        $icon = $item["icon"] ?? false;
        $defaultTheme = $item["theme"] ?? "btn-default";
        $defaultTheme = $typeMenu != ""  ? $typeMenu : $defaultTheme;
        $class = $item["class"] ?? false;
        $data = $item["data"] ?? false;
        $isDisabled = $item["disabled"] ?? false;
        $disabled = $isDisabled ? "disabled" : "";
        $dataAttributes = "";
        if ($data) {
            foreach ($data as $attribute => $value) {
                $dataAttributes .= "data-{$attribute}='{$value}' ";
            }
        }
        return "<{$type} {$typeButton} {$href} {$target} class='dropdown-item {$defaultTheme} {$class}' $dataAttributes $disabled ><i style='width: 25px;text-align:center' class='{$icon} pr-1'></i>{$title}</{$type}>";
    }
    public static function generarSwitch($hasId = false, string $class, bool $active = true, array $data = [], string $title): string
    {
        $idEl = $hasId === true ? $hasId : uniqid();
        $titleEl = $title ? "<label class='custom-control-label' for='$idEl'>$title</label>" : "";
        $activeEl = $active ? "checked" : "";
        $dataEl = "";
        if ($data) {
            foreach ($data as $attribute => $value) {
                $dataEl .= "data-{$attribute}='{$value}' ";
            }
        }
        $switchEl = "<div class='form-group'>
            <div class='custom-control custom-switch'>
            <input type='checkbox' class='custom-control-input $class' id='$idEl' $dataEl $activeEl>
                $titleEl
            </div>
        </div>";
        return $switchEl;
    }
    public static function generarBadges($badges = [], $container = false)
    {
        $badges_html = "";

        if (count($badges) == 0) {
            throw new Exception("No se puede crear un badge sin contenido.");
        }

        foreach ($badges as $badge) {
            $badges_html .= "<span class='badge bg-{$badge["color"]} mx-1 my-1'>{$badge["texto"]}</span>";
        }
        $badges_html = $container ? "<div class='w-100 text-center'>{$badges_html}</div>" : $badges_html;
        return $badges_html;
    }

    public static function generarButton($props = []): string
    {
        $id = $props["id"] ?? "";
        $class = $props["custom_class"] ?? "primary";
        $text = $props["text"] ?? "Boton";
        $type = $props["type"] ?? "button";
        $data = $props["data"] ?? [];
        $str_data = "";
        foreach ($data as $key => $value) {
            $str_data .= "data-{$key}='{$value}' ";
        }
        return "<button id='{$id}' type='{$type}' {$str_data} class='btn {$class}'>{$text}</button>";
    }
}
