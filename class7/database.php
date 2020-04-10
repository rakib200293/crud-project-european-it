




<?php

class database{
  public $host='localhost';
    public $username='root';
    public $password='';
    public $dbname='student_management';
    public $link;
    public $error;
   public function __construct(){
       $this->dbconnect();

   }
   public function dbconnect(){
    $this->link=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
    if($this->link==false){
        $this->error="Connection faild".$this->link->connect_error;
        return false;
    }
   }

  public function select($query){
    $result=$this->link->query($query);
   return $result;

}
public function insert($query){
     $result=$this->link->query($query);
     return $result;
}
public function upadate($query){
    $result=$this->link->query($query);
    return $result;
}
 public function delete($query){
     $result=$this->link->query($query);
     return $result;
 }
}
