<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:35
 */

class HomeController extends BaseController
{
    public function index(){
        session_start();
//        MainHelper::dj(CryptoHelper::getToken(64));
        $username = "miqdadyyy";
//        $name = "Miqdad Farcha";
//        $email = "miqdad.faraarara@asd.assd";
        $password = "asd";
//        $user = (new User())->login($username, $password);
//        $_SESSION["auth"] = $user["data"]->token;
//        MainHelper::dj($user);
        MainHelper::dj($_SESSION["auth"]);
    }
}