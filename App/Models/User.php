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
    protected $hidden = ['password'];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns, $this->hidden);
    }

    public function login($username, $password){
        $password = md5($password);
        $password = "'$password'";
        if(filter_var($username, FILTER_VALIDATE_EMAIL)){ // if email
            $username = "'$username'";
            $result = $this->get("email = $username AND password = $password");
        } else {
            $username = "'$username'";
            $result = $this->get("username = $username AND password = $password");
        }

        if($result["message"] == 'success'){
            $id = 1;
            $token = CryptoHelper::getToken(64);
//            $id = $result["data"][0]->id;
            $result = $this->update("id = $id", [
                'token' => $token
            ]);
            $result["data"] = $result["data"][0];
            return $result;
        }
        return $result;
    }

    public function register(array $data){
        $data['password'] = md5($data['password']);
        return $this->create($data);
    }
}