<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:58
 */

class User extends BaseModel
{
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct($this->table);
    }
}