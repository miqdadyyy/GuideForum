<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:29
 */

class MainHelper
{
    public static function renderError($view, array $data = []){
        extract($data);
        if(is_readable('../App/Views/errors/' . $view . '.php')){
            require_once '../App/Views/errors/' . $view . '.php';
        } else {
            throw new Exception("View $view not available or readable");
        }
    }

    public static function dj($data){
        echo json_encode($data);
        die();
    }
}