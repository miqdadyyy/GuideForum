<?php


class TestingController
{
    public function index(){
        echo "asdasd";
    }

    public function test($id){
        echo json_encode($id);
    }
}