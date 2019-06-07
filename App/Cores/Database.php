<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:43
 */

abstract class Database
{
    protected static function getDB()
    {
        static $HOST = "localhost";
        static $USERNAME = "miqdad";
        static $PASSWORD = "monalisa123";
        static $DATABASE = "gf";

        static $db = null;

        if($db == null){
            $db = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE) or die("Error connection to database");
        }

        return $db;
    }
}