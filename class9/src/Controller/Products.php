<?php

   namespace App\Controller;
   use App\Traits\Admin;
   use App\Interfaces\Order;
   use App\Controller\Brands;

  /**
   *
   */
  class Products extends Catagory

  {

    public $product_name;
    public $product_short_discription;
    public $product_long_discription;
    public $product_status;
    public $email;
    public $password;
    public $brand;
    use Admin;
    public function __construct()
    {
            $this->brand=new Brands();
    }

    public function add_product($product_name,$short_discription,$long_discription,$status){
                          $this->product_name=$product_name;
                          $this->product_short_discriptionshort_discription=$short_discription;
                          $this->product_long_discriptionlong_discription=$long_discription;
                          $this->product_statusstatus=$status;


    }
    public function manage_product(){
                          echo "Catagory Name :". self::$catagory_name."<br/>";
                          echo "Catagory Name :". $this->brand->name."<br/>";
                          echo "Product Name :$this->product_name.<br/>";
                          echo "Short Discription : $this->product_short_discriptionshort_discription .<br/>";
                          echo "Long Discription:$this->product_long_discriptionlong_discription .<br/>";
                          echo "Status :$this->product_statusstatus .<br/>";
    }

    public function manage_user($email,$password){
         $this->manage_login($email,$password);
  }
    public function orderdetails(){

    }

}
?>
