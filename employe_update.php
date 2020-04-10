<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    

    
  $id = $_GET['id'];
  $name = $_POST['e_name'];
  $jid = $_POST['j_id'];
  $desg = $_POST['e_desg'];
  $shift = $_POST['e_shift'];
  $mob = $_POST['e_mob'];
  $email = $_POST['e_email'];
  $com = $_POST['comment'];


  if(isset($_FILES['e_image']['name']) && !empty($_FILES['e_image']['name'])){
		 
    $rand=rand(10000,99999); 
    $path="uploads/".$rand.'__'.$_FILES['e_image']['name'];
    $sql = "SELECT photo FROM employee WHERE employee_id = '$id'";
    $img_result = mysqli_query($conn,$sql);
    $img_result_arr = mysqli_fetch_assoc($img_result);

    // echo $img_result_arr['photo'];
    // die;
    if(file_exists($img_result_arr['photo'])){
        unlink($img_result_arr['photo']);
    }
          
     move_uploaded_file($_FILES["e_image"]["tmp_name"],$path);		 
     $sql = "UPDATE employee SET employee_name='$name', job_id= '$jid', designation= '$desg', shift= '$shift', mobile = '$mob', email = '$email',photo='$path',comment = '$com' WHERE employee_id = '$id'";
     
     ;
     
    }else{
        $sql = "UPDATE employee SET employee_name='$name', job_id= '$jid', designation= '$desg', shift= '$shift', mobile = '$mob', email = '$email', comment = '$com' WHERE employee_id = '$id'";
    }



if(mysqli_query($conn,$sql)){
 header("Location:employe_list.php");
}else{
 echo "Not inserted";
}
 