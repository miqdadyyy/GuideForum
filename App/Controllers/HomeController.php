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
        $username = "miqdsad";
        $name = "Miqdad Farcha";
        $email = "miqdad.faraarara@asd.assd";
        $password = "lol";
        $user = (new User())->login($email, $password);
        MainHelper::dj($user);
    }
}