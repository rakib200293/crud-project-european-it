<?php
  namespace App\Abstracts;

  abstract class Teacher{
                 public $name;
                 abstract function profile($name,$email,$address);

                 abstract function slaray($id,$amount);
                 public function  positaon($name){
                                $this->name=$name;
                                echo $this->name;
                 }

  }




?>
