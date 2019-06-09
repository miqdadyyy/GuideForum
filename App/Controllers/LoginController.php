<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 09/06/19
 * Time: 22:32
 */

class LoginController extends BaseController
{
    public function index($request)
    {
        session_start();

        if(isset($_SESSION["auth"])){
            if($user = User::checkToken($_SESSION["auth"])){
                header('Location: /dashboard');
            }
        }

        if (count($request[0]) == 0) { // if doesnt have post request
            $this->view('login');
        } else { // if have post request
            if (isset($request[0]["username"]) || !isset($request[0]["password"])) {
                $username = str_replace("'", "", $request[0]["username"]);
                $username = str_replace("=", "", $username);
                $username = str_replace("/", "", $username);
                $username = str_replace("*", "", $username);

                $password = str_replace("'", "", $request[0]["password"]);
                $password = str_replace("=", "", $password);
                $password = str_replace("/", "", $password);
                $password = str_replace("*", "", $password);

                $user = User::login($username, $password);

                MainHelper::dj($user);
            }
        }
    }
}