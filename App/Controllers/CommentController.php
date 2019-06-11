<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 11/06/19
 * Time: 15:26
 */

class CommentController extends BaseController
{
    public function store($request){
        session_start();
        if (isset($_SESSION["auth"])) {
            $user = User::checkToken($_SESSION["auth"]);
            if ($user == null) {
                header('Location: /login');
            } else {
                $data = (object) $request[0];
                $comment = Comment::createComment([
                    'id_post' => $data->id_post,
                    'comments' => $data->comment,
                    'id_user' => $user->id,
                    'created_at' => DateHelper::getTimeStamp()
                ]);
                if($comment["message"] == "success"){
                    header('Location: /dashboard/post/' . $data->id_post);
                } else {
                    header('Location: /dashboard/post/' . $data->id_post);
                }
            }
        } else {
            header('Location: /login');
        }
    }
}