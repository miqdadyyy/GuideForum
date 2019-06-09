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


}