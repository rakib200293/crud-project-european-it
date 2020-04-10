<?php

    namespace App\Controller;

    class Catagory extends Brands {
      public static $catagory_name;
      public static $catagory_short_discription;
      public static $catagory_long_discription;
      public static $catagory_status;

        public function __construct(){

    }


     public static function add_catagory($catagory_name,$short_discription,$long_discription,$status){
                        self::$catagory_name=$catagory_name;
                        self::$catagory_short_discription=$short_discription;
                        self::$catagory_long_discription=$long_discription;
                        self::$catagory_status=$status;
    }

     public static function manage_catagory(){
                   $manage_catagory=[
                           self::$catagory_name,
                           self::$catagory_short_discription,
                           self::$catagory_long_discription,
                           self::$catagory_status,
                   ];
                   return $manage_catagory;
     }


     static public function update_catagory($catagory_name,$short_discription,$long_discription,$status){
                         self::$catagory_name=$catagory_name;
                         self::$catagory_short_discription=$short_discription;
                         self::$catagory_long_discription=$long_discription;
                         self::$catagory_status=$status;
     }

       static public function update_manage_catagory(){
                    $update_catagory=[
                            self::$catagory_name,
                            self::$catagory_short_discription,
                            self::$catagory_long_discription,
                            self::$catagory_status,
                    ];
                    return $update_catagory;
      }


}


?>
