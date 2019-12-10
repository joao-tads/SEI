<?php


namespace Ifnc\Tads\Helper;


final class Render
{
    public static function html($paths, $data): string
    {
        extract($data);
        ob_start();
        foreach($paths as $path){
            require $_SERVER['DOCUMENT_ROOT']."/../View/{$path}";
        }
        $html = ob_get_clean();
        return $html;
    }
}