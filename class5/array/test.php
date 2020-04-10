

<?php 

  $test=[
  
     [1,3,5,7],
     [2,4,6,8],
     [5,9,3,7],
     [11,20,10,13]
  
  ];



   echo "<table border>";
    foreach($test as $v1){
        echo "<tr>";
          foreach($v1 as $v2){
            echo "<td>";
            echo "$v2";
            echo "</td>";


              
          }

          echo "</tr>";

    }

   echo "</table>"
  ?>