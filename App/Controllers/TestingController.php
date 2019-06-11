<?php


class TestingController extends BaseController
{
    public function index($request){
        $post = (object) Post::takeSome(4)["data"][3];
        $post->comment_count = Comment::getCommentLengthFromPost($post->id);
//        MainHelper::dj($post);
//        $this->view('user/post-detail', ['post' => $post]);
        $this->view('user/content-forum');
    }

    public function test($id){

    }
}