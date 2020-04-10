<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

  $id = $_GET['id'];
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $reg = $_POST['reg'];
  $shift = $_POST['shift'];
  $gen = $_POST['sex'];
  $inst = $_POST['insname'];
  $dept = $_POST['dept'];

 
 if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])){
		 
		$rand=rand(10000,99999); 
    $path="uploads/".$rand.'__'.$_FILES['image']['name'];
    
    $_sql = "SELECT student_pic from students where student_id = $id";
    $img_result = mysqli_query($conn,$_sql);
    $img_result_arr = mysqli_fetch_assoc($img_result);

    if(file_exists($img_result_arr['student_pic'])){
      unlink($img_result_arr['student_pic']);
    }
		
		//unlink($row['student_pic']);
		
		 move_uploaded_file($_FILES["image"]["tmp_name"],$path);		 
     $sql = "UPDATE students SET student_name='$name', student_roll= '$roll', student_reg= '$reg', shift= '$shift', gender = '$gen', institute_name = '$inst', department = '$dept',student_pic='$path' WHERE student_id = '$id'";
		 
		}else{
			echo "Something went wrong";
		}
 

 
 if(mysqli_query($conn,$sql)){
	 header("Location:student_list.php");
 }else{
	 echo "Not inserted";
 }


?>