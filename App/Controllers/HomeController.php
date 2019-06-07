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
        $name = (new User())->select(['name'], 2)[0]["name"];
        $this->view('login', compact('name'));
    }
}