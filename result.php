

<?php

  if(isset($_POST['btn']))

        $result=$_POST['result'];
        if($result<=100 && $result>=80){
          echo "Your Result is  A+ ";
        }elseif ($result<=79 && $result>=70) {
          echo "Your Result is  A";
        }
        elseif ($result<=69 && $result>=60) {
          echo "Your Result is  A-";
        }
        elseif ($result<=59 && $result>=50) {
          echo "Your Result is  B";
        }
        elseif ($result<=49 && $result>=40) {
          echo "Your Result is  C";
        }
        elseif ($result<=39 && $result>=33) {
          echo "Your Result is  D";
        }
        elseif ($result<=38 && $result>=0) {
          echo "You are failed";
        }
?>




   <form class="" action="" method="post">
     <input type="text" name="result" value="">
     <input type="submit" name="btn" value="submit">
   </form>
