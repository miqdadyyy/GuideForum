<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 11/06/19
 * Time: 17:06
 */

class RatingController
{
    public function store($request){
        session_start();
        $data = (object) $request[0];
        if (isset($_SESSION["auth"])) {
            $user = User::checkToken($_SESSION["auth"]);
            if ($user == null) {
                echo "failed auth";
            } else {
                $data = (object) $request[0];
                $rating = Rating::makeRating($data->id_post, $data->star, $user->id);
                if($rating["message"] = 'success'){
                    echo "success";
                } else {
                    echo "failed";
                }
            }
        } else {
            echo "failed auth";
        }

    }
}