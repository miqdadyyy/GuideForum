<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 09/06/19
 * Time: 23:09
 */

class DashboardController extends BaseController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION["auth"])) {
            $user = User::checkToken($_SESSION["auth"]);
            if ($user == null) {
                header('Location: /login');
            } else {
                $this->view('user/index', ['title' => 'Dashboard']);
            }
        } else {
            header('Location: /login');
        }
    }

    public function profile(){
        session_start();
        $user = User::checkToken($_SESSION["auth"]);
        $this->view('user/profile', ['title' => 'Profile', 'user' => $user]);
    }

    public function post($request){
        session_start();
        if (isset($_SESSION["auth"])) {
            $user = User::checkToken($_SESSION["auth"]);
            if ($user == null) {
                header('Location: /login');
            } else {
                if($request[0][0] == "create"){
                    $this->view('user/post-create', ['title' => 'Create Post']);
                }
            }
        } else {
            header('Location: /login');
        }

//        MainHelper::dj($request[0][0] == "create");
    }
}