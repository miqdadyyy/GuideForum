<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 10/06/19
 * Time: 1:40
 */

class Comment extends BaseModel
{
    protected $table = 'comments';
    protected $columns = ['id', 'id_post', 'comments', 'id_user', 'created_at', 'deleted_at'];
    protected $hidden = [];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns, $this->hidden);
    }

    public static function getCommentsFromPost($id_post){
        $comments = new Comment();
        return $comments->get("id_post = $id_post");
    }
    public static function getCommentLengthFromPost($id_post){
        return count(self::getCommentsFromPost($id_post)["data"]);
    }

    public static function createComment(array $data){
        $comment = new Comment();
        $comment = $comment->create($data);
        return $comment;
    }

    public static function deleteComment($clausion){
        $comment = new Comment();
        if (is_numeric($clausion)) {
            return $comment->delete("id = $clausion");
        } else {
            return $comment->delete("$clausion");
        }
    }
}