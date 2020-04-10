
<?php
     include "vendor/autoload.php";
     use App\Controller\Catagory;
    use App\Controller\Brands;
    use App\Controller\Products;
    $brand=new Brands();
    $product=new Products();


        echo"<h2>Catagory List</h2>";
        echo"<hr>";
        Catagory::add_catagory('Laptob','This is a good product in the market place ','This is a mordern electronic device it is use for different kinds of communication system','published');

        $manage_catagory=Catagory::manage_catagory();
         echo " Name :". $manage_catagory['0']."<br/>";
         echo " Shor Discription :". $manage_catagory['1']."<br/>";
         echo " Long Discription :". $manage_catagory['2']."<br/>";
         echo " Status :". $manage_catagory['3']."<br/>";


         echo"<h2>Update Catagory</h2>";
         echo"<hr>";
         Catagory::update_catagory('Software', 'This is a good product in the market place ','This is a mordern electronic device it is use for','published');
         $update_catagory=Catagory::update_manage_catagory();
          echo " Name :". $update_catagory['0']."<br/>";
          echo " Shor Discription :". $update_catagory['1']."<br/>";
          echo " Long Discription :". $update_catagory['2']."<br/>";
          echo " Status :". $update_catagory['3']."<br/>";


    echo"<h2>Brand List</h2>";
    echo"<hr>";
    $brand->add_brand('Asus','This is a good product in the market place ','This is a mordern electronic device it is use for different kinds of communication system','published');
    $brand->manage_brand();

    echo"<h2>Update Brand</h2>";
    echo"<hr>";
    $brand->update_brand('Samsunng', 'This is a good product in the market place ','This is a mordern electronic device it is use for','published');
    $brand->mange_update_brand();




        echo"<h2>Product List</h2>";
        echo"<hr>";
        $product->add_product('Asus','This is a good product in the market place ','This is a mordern electronic device it is use for different kinds of communication system','published');
        $product->manage_product();

        echo"<h2>User </h2>";
        echo"<hr>";
        $product->manage_user('padar@gmail.com',123654);

?>
