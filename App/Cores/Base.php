<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:07
 */

class Base
{
    protected $statusCode = 200;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function respond($message){
        header($_SERVER['SERVER_PROTOCOL'] . $message);
        header("HTTP/1.0 $message");

        render($this->getStatusCode());

        exit();
    }

    public function respondNotFound(){
        $this->setStatusCode(400)->respond("404 Not Found");
    }
}