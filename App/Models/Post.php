<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 10/06/19
 * Time: 0:49
 */

class Post extends BaseModel
{
    protected $table = 'posts';
    protected $columns = ['id', 'title', 'description', 'address', 'image_path', 'rating', 'id_category', 'id_user', 'created_at'];
    protected $hidden = [];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns, $this->hidden);
    }

    public static function getAllPosts()
    {
        $posts = new Post();
        $posts = $posts->get();
        return $posts;
    }

    public static function getOwnPosts($id_user)
    {
        if (is_numeric($id_user)) {
            $posts = new Post();
            $posts = $posts->get("id_user = $id_user");
            return $posts;
        }
        return null;
    }

    public static function getPostByCategory($id_category)
    {
        if (is_numeric($id_category)) {
            $posts = new Post();
            $posts = $posts->get("id_category = $id_category");
            return $posts;
        }
        return null;
    }

    public static function getDetailPost($id)
    {
        if (is_numeric($id)) {
            $posts = new Post();
            $posts = $posts->find($id);
            return $posts;
        }
        return null;
    }

    public static function createPost(array $data)
    {
        $posts = new Post();
        $posts = $posts->create($data);

        return $posts;
    }

    public static function deletePost($clausion)
    {
        $post = new Post();
        if (is_numeric($clausion)) {
            return $post->delete("id = $clausion");
        } else {
            return $post->delete("$clausion");
        }
    }
}