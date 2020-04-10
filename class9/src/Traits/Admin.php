<?php

    namespace App\Traits;
    trait Admin{

        public  $password;
        public $email;

        public function manage_login($email,$password){
                 echo "User Email  :" .$this->email=$email."<br/>";
                 echo "User Password :".$this->password=$password."<br/>";
        }
    }

?>
