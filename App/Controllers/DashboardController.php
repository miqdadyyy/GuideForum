<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 09/06/19
 * Time: 23:09
 */

class DashboardController extends BaseController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION["auth"])) {
            $user = User::checkToken($_SESSION["auth"]);
            if ($user == null) {
                header('Location: /login');
            } else {
                $posts = Post::getAllPosts();
                foreach ($posts["data"] as $post) {
                    $post->comment_count = Comment::getCommentLengthFromPost($post->id);
                }
                $this->view('user/index', ['title' => 'Dashboard', 'posts' => $posts]);
            }
        } else {
            header('Location: /login');
        }
    }

    public function profile()
    {
        session_start();
        $user = User::checkToken($_SESSION["auth"]);
        $posts = Post::getOwnPosts($user->id);
        foreach ($posts["data"] as $post) {
            $post->comment_count = Comment::getCommentLengthFromPost($post->id);
        }
//        MainHelper::dj($posts);
        $this->view('user/profile', ['title' => 'Profile', 'user' => $user, 'posts' => $posts]);
    }

    public function post($request)
    {
        if (count($request[0]) == 0) {
            $this->respondNotFound();
        }

        session_start();
        if (isset($_SESSION["auth"])) {
            $user = User::checkToken($_SESSION["auth"]);
            if ($user == null) {
                header('Location: /login');
            } else {
                if ($request[0][0] == "create") {
                    $this->view('user/post-create', ['title' => 'Create Post']);
                } else if ($request[0][0] == "store") {
                    $data = (object)$request[1];
                    $image_path = FileHelper::uploadThumbnail($data->thumbnail);
                    $post = Post::createPost([
                        'title' => $data->title,
                        'description' => $data->description,
                        'address' => $data->address,
                        'rating' => 0,
                        'image_path' => $image_path,
                        'id_category' => $data->id_category,
                        'id_user' => $data->id_user,
                        'created_at' => (new DateTime())->format("Y-m-d H:i:s")
                    ]);
                    header('Location: /dashboard');
                } else if (is_numeric($request[0][0])) {
                    echo "num";
                } else {
                    $this->respondNotFound();
                }
            }
        } else {
            header('Location: /login');
        }
    }
}