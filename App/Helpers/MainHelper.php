<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:29
 */

class MainHelper
{
    public function render($view, array $data = []){
        extract($data);
        if(is_readable('../Views/partials/' . $view . '.php')){
            require_once '../Views/partials/' . $view . '.php';
        } else {
            throw new Exception("Partial $view not available or readable");
        }
    }

    public static function dj($data){
        echo json_encode($data);
    }
}