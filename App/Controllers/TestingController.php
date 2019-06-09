<?php


class TestingController
{
    public function index(){
        User::login('miqdadyyy', 'asd');
    }

    public function test($id){
        echo json_encode($id);
    }
}