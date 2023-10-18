<?php

class User{

    public $id,$username,$password;

    public function __construct($id=NULL,$username=NULL,$password=NULL)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function logInUser(User $user,mysqli $conn)
    {
        $query_s = "SELECT * FROM user WHERE username='$user->username' AND password ='$user->password'";
        return $conn->query($query_s);
    }
}
?>