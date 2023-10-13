<?php
class User{

    public $id,$username,$password;

    public function __construct($id,$username,$password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    
}


?>