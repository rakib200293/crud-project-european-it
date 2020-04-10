<?php

    session_start();


    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
 
  if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $reg = $_POST['reg'];
  $shift = $_POST['shift'];
  $gen = $_POST['sex'];
  $inst = $_POST['insname'];
  $dept = $_POST['dept'];
  $rand=time(); 

  $errorBag = [];

  if (empty($name)) {
      $errorBag['name_err'] = "Name field is required";
  }elseif(!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $errorBag['name_err'] = "Only letters and white space allowed";
      } 

      $qroll = "SELECT student_roll FROM students WHERE student_roll = '$roll'";
      $r = mysqli_query($conn, $qroll);

  if (empty($roll)) {
          $errorBag['roll_err'] = "Roll field is required";
      }
      elseif($r->num_rows > 0){
        $errorBag['roll_err']= "Roll already exists";
      }

      $qreg = "SELECT student_reg FROM students WHERE student_reg = '$reg'";
      $res = mysqli_query($conn, $qreg);

  if (empty($reg)) {
      $errorBag['reg_err'] = "Registration field is required";
  }
  elseif ($res->num_rows > 0) {
      $errorBag['reg_err'] = "Registration already exist";
  }
  if (empty($inst)) {
    $errorBag['inst_err'] = "Institute field is required";
}
  if (empty($dept)) {
    $errorBag['dept_err'] = "Department field is required";
  }
  

  if (count($errorBag) > 0) {
      $_SESSION['err'] = $errorBag;
      header("Location:student_add.php");
  }
		  
		   
    else{
    $path="uploads/".$rand.'__'.$_FILES['image']['name'];
		
		 move_uploaded_file($_FILES["image"]["tmp_name"],$path);
 
 
 $sql = "INSERT INTO students Values(NULL,'$name','$roll','$reg','$shift','$gen','$inst','$dept','$path')";
 
 if(mysqli_query($conn,$sql)){
	
	header("location:student_list.php");
 }else{
	 echo "Not inserted";
 }
}
  }

?>