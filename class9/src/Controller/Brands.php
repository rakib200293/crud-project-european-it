<?php
  namespace App\Controller;
  /**
   *
   */
  class Brands
  {
    public $name='Asus notebook 23';
    public $short_discription;
    public $long_discription;
    public $status;
    public function __construct(){
        // echo "Brands Inser Successfully";
    }

      public function add_brand($name,$short_discription,$long_discription,$status){
                           $this->name=$name;
                           $this->short_discription=$short_discription;
                           $this->long_discription=$long_discription;
                           $this->status=$status;


      }

      public function manage_brand(){
                      echo "Name :$this->name.<br/>";
                      echo "Short Discription : $this->short_discription .<br/>";
                      echo "Long Discription:$this->long_discription .<br/>";
                      echo "Status :$this->status .<br/>";
      }

      public function update_brand($name,$short_discription,$long_discription,$status){
                        $this->name=$name;
                        $this->short_discription=$short_discription;
                        $this->long_discription=$long_discription;
                        $this->status=$status;

      }

      public function mange_update_brand(){
        echo "Name :$this->name.<br/>";
        echo "Short Discription :$this->short_discription .<br/>";
        echo "Long Discription:$this->long_discription.<br/>";
        echo "Status :$this->status .<br/>";
      }


  }



?>
