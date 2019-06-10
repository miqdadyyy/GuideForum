<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 10/06/19
 * Time: 1:23
 */

class FileHelper
{
    public static function uploadThumbnail($file)
    {
        $extensions = array("jpeg", "jpg", "png");
        $file_tmp = $file['tmp_name'];
        $file_ext = strtolower(end(explode('.', $file['name'])));
        $file_name = CryptoHelper::getToken(8) . '.' . $file_ext;

        if (in_array($file_ext, $extensions) === false) {
            return null;
        }

        move_uploaded_file($file_tmp, "img/uploads/thumbnail/" . $file_name);

        return "img/uploads/thumbnail/$file_name";
    }
}