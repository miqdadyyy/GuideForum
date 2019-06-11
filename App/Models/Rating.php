<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 10/06/19
 * Time: 1:47
 */

class Rating extends BaseModel
{
    protected $table = 'ratings';
    protected $columns = ['id', 'id_user', 'id_post', 'rating'];
    protected $hidden = [];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns, $this->hidden);
    }

    public static function makeRating($id_post, $ratings, $id_user){
        $rating = new Rating();
        $rating = $rating->create([
            'id_post' => $id_post,
            'rating' => $ratings,
            'id_user' => $id_user
        ]);
        return $rating;
    }

    public static function checkRating($id_post, $id_user){
        $rating = new Rating();
        $rating = $rating->select(['id'], "id_post = $id_post AND id_user = $id_user");
        if($rating["message"] == "success"){
            return true;
        } else {
            return false;
        }
    }

    public static function getAllRating($id_post){
        $rating = new Rating();
        $rating = $rating->select(['rating'], "id_post = $id_post");
        return $rating;
    }
}