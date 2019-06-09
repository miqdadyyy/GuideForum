<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 10/06/19
 * Time: 1:37
 */

class Category extends BaseModel
{
    protected $table = 'categories';
    protected $columns = ['id', 'category'];
    protected $hidden = [];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns, $this->hidden);
    }

    public function getAllCategory(){
        $categories = new Category();
        return $categories->get();
    }
}