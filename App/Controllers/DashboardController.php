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
                    $ratings = Rating::getAllRating($post->id);
                    $total_r = 0;
                    foreach ($ratings["data"] as $rating){
                        $total_r += $rating->rating;
                    }
                    $post->rating = $ratings["message"] == "success" ? $total_r/count($ratings["data"]) : 0;
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
            $ratings = Rating::getAllRating($post->id);
            $total_r = 0;
            foreach ($ratings["data"] as $rating){
                $total_r += $rating->rating;
            }
            $post->rating = $ratings["message"] == "success" ? $total_r/count($ratings["data"]) : 0;
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
                    $categories = Category::getAllCategory();
                    $this->view('user/post-create', ['title' => 'Create Post', 'categories' => $categories]);
                } else if ($request[0][0] == "store") {
                    $data = (object) $request[1];
                    $image_path = FileHelper::uploadThumbnail($_FILES["thumbnail"]);

                    $post = Post::createPost([
                        'title' => $data->title,
                        'description' => $data->description,
                        'address' => $data->address,
                        'rating' => 0,
                        'image_path' => $image_path,
                        'id_category' => $data->id_category,
                        'id_user' => $user->id,
                        'created_at' => DateHelper::getTimeStamp()
                    ]);

                    header('Location: /dashboard');
                } else if (is_numeric($request[0][0])) {
                    $post = Post::findPost($request[0][0]);
                    if($post["message"] == "empty"){
                        $this->respondNotFound();
                    }
                    $post = (object) $post["data"][0];
                    $ratings = Rating::getAllRating($post->id);
                    $total_r = 0;
                    foreach ($ratings["data"] as $rating){
                        $total_r += $rating->rating;
                    }
                    $post->rating = $ratings["message"] == "success" ? $total_r/count($ratings["data"]) : 0;
                    $post->comments = Comment::getCommentsFromPost($post->id)["data"];
                    $this->view('user/post-detail', ['title' => $post->title,'post' => $post, 'user' => $user]);

                } else {
                    $this->respondNotFound();
                }
            }
        } else {
            header('Location: /login');
        }
    }
}