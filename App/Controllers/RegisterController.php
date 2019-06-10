<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 09/06/19
 * Time: 22:39
 */

class RegisterController extends BaseController
{
    public function index($request)
    {
        $data = (object)$request[0];
        $errors = [];
        if (!isset($data->name) || strlen($data->name) == 0) {
            array_push($errors, 'Name field is required');
        }
        if (!isset($data->username) || strlen($data->username) == 0) {
            array_push($errors, 'Username field is required');
        } else {
            if (User::checkUsername($data->username)) {
                array_push($errors, 'Username alerady exists');
            }
        }
        if (!isset($data->email) || strlen($data->email) == 0) {
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
            $this->view('index', ['errors' => $errors]);
        } else {
            $user = User::register([
                'name' => $data->name,
                'username' => $data->username,
                'email' => $data->email,
                'password' => $data->password
            ]);

            if ($user["message"] == 'success') {
                session_start();
                if (isset($_SESSION["auth"])) {
                    User::clearToken($_SESSION["auth"]);
                    User::login($data->username, $data->password);
                }

                User::login($data->username, $data->password);
            } else {
                $this->view('index', ['errors' => [$user["message"]]]);
            }
        }

    }
}