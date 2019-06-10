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
        $posts = Post::takeSome(3);
        foreach ($posts["data"] as $post) {
            $post->comment_count = Comment::getCommentLengthFromPost($post->id);
        }
        $this->view('index', ['posts' => $posts]);
    }
}