<?php


class TestingController
{
    public function index($request){
        MainHelper::dj(Comment::getCommentLengthFromPost(1));
    }

    public function test($id){

    }
}