<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 09/06/19
 * Time: 22:39
 */

class RegisterController
{
    public function index($request)
    {
        $data = (object)$request[0];
        $errors = [];
        if (!isset($data->name)) {
            array_push($errors, 'Name field is required');
        }

        if (!isset($data->username)) {
            array_push($errors, 'Username field is required');
        } else {
            if (!User::checkUsername($data->username)) {
                array_push($errors, 'Username alerady exists');
            }
        }

        if (!isset($data->email)) {
            array_push($errors, 'Email field is required');
        } else {
            if (!User::checkEmail($data->email)) {
                array_push($errors, 'Email alerady exists');
            }
        }

        if (!isset($data->password)) {
            array_push($errors, 'Password field is required');
        }

        if (count($errors) > 0) {
            MainHelper::dj($errors);
//            header('Location: /');
        } else {
            $user = User::register([
                'name' => $data->name,
                'username' => $data->username,
                'email' => $data->email,
                'password' => $data->password
            ]);

            if($user["message"] == 'success'){
                session_start();
                if(isset($_SESSION["auth"])){
                    User::clearToken($_SESSION["auth"]);
                    User::login($data->username, $data->password);
                }

                User::login($data->username, $data->password);
            } else {
                MainHelper::dj($user["message"]);
                // TODO: ERROR REGISTER
            }
        }

    }
}