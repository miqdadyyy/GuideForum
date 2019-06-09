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
        MainHelper::dj($data->name);
        $errors = [];
        if (!isset($data->name)) {
            array_push($errors, 'Name field is required');
        }

        if (!isset($data->username)) {
            array_push($errors, 'Username field is required');
        } else {
            if (User::checkUsername($data->username)) {
                array_push($errors, 'Username alerady exists');
            }
        }

        if (!isset($data->email)) {
            array_push($errors, 'Email field is required');
        } else {
            if (User::checkEmail($data->email)) {
                array_push($errors, 'Email alerady exists');
            }
        }

        if (!isset($data->password)) {
            array_push($errors, 'Password field is required');
        }

        if (count($errors) > 0) {
            header('Location: /');
        } else {
            
        }

    }
}