<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 10/06/19
 * Time: 11:53
 */

class DateHelper
{
    public static function datetimeToString($date){
        return date('d F Y', strtotime($date));
    }
}