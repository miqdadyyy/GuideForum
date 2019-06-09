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
        $this->view('index');
    }
}