<?php 
   $year='2014';
   if(($year%4)='0' && $year%100 !='0' || $year%400='0'){
         echo "This is leaf year";
   }



?>