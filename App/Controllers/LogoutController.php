<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 09/06/19
 * Time: 23:39
 */

class LogoutController
{
    public function index($request){
        session_start();
        User::logout($_SESSION["auth"]);

        if (count($request[0]) == 0) { // if doesnt have post request
            MainHelper::dj("METHOD NOT ALLOWED");
        } else {
            User::logout($_SESSION["auth"]);
        }
    }
}