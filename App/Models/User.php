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
    protected $columns = ['name', 'username', 'email', 'password', 'token'];
    protected $hidden = ['password', 'token'];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns, $this->hidden);
    }

    public static function login($username, $password){
        $user = new User();
        $password = md5($password);
        $password = "'$password'";
        if(filter_var($username, FILTER_VALIDATE_EMAIL)){ // if email
            $username = "'$username'";
            $result = $user->get("email = $username AND password = $password");
        } else {
            $username = "'$username'";
            $result = $user->get("username = $username AND password = $password");
        }

        if($result["message"] == 'success'){
            $id = 1;
            $token = CryptoHelper::getToken(64);
            $result = $user->update("id = $id", [
                'token' => $token
            ]);
            $result["data"] = $result["data"][0];
            return $result;
        }
        return $result;
    }

    public static function register(array $data){
        $data['password'] = md5($data['password']);
        return (new User())->create($data);
    }

    public static function findOrFail($param){
        $user = new User();
        if(is_numeric($param)){
            $user = $user->find($param);
        } else if(filter_var($param, FILTER_VALIDATE_EMAIL)){
            $user = $user->get("email = '$param'");
        } else {
            $user = $user->get("username = '$param'");
        }

        if($user["message"] == 'success'){
            return $user["data"][0];
        } else {
            return MainHelper::renderError(404);
        }
    }

    public static function checkUsername($username){
        $user = new User();
        $user = $user->select(null, "username = '$username'");
        if($user["message"] == 'empty'){
            return false;
        } else {
            return true;
        }
    }

    public static function checkEmail($email){
        $user = new User();
        $user = $user->select(null, "email = '$email'");
        if($user["message"] == 'empty'){
            return false;
        } else {
            return true;
        }
    }
}