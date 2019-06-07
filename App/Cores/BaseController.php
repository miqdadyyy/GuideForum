<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:22
 */

class BaseController extends Base
{
    public function model($model)
    {
        if (is_readable('../App/Models/' . $model . '.php')) {
            require_once '../App/Models/' . $model . '.php';

            return new $model();
        }

        throw new Exception("Model $model is not available or not readable");
    }

    public function view($view, $data = [])
    {
        $data['view'] = $view;
        extract($data);

        if (is_readable('../App/Views/' . $view . '.php')) {
            require_once '../App/Views/' . $view . '.php';
        } else {
            $this->respondNotFound();
        }
    }
}