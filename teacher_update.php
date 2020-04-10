<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "classproject";
	
//Create Connection
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
  
$id = $_GET['id'];
$name = $_POST['tname'];
$join = $_POST['join'];
$sell = $_POST['sellary'];
$sub = $_POST['sub'];
 
 
 
if(isset($_FILES['timage']['name']) && !empty($_FILES['timage']['name'])){
				
	$rand=rand(10000,99999); 
	$path="uploads/".$rand.'__'.$_FILES['timage']['name'];

	$sql = "SELECT teacher_pic FROM teachers WHERE teacher_id = $id";
	$img_result = mysqli_query($conn,$sql);
	$img_result_arr = mysqli_fetch_assoc($img_result);

	if (file_exists($img_result_arr['teacher_pic'])) {
		unlink($img_result_arr['teacher_pic']);
	}

	move_uploaded_file($_FILES["timage"]["tmp_name"],$path);		 
	$sql = "UPDATE teachers SET teacher_name='$name', join_date= '$join', sallery= '$sell', subject= '$sub',teacher_pic='$path' WHERE teacher_id = '$id'";
	
}else{

	$sql = "UPDATE teachers SET teacher_name='$name', join_date= '$join', sallery= '$sell', subject= '$sub' WHERE teacher_id = '$id'";

}
 

 
if(mysqli_query($conn,$sql)){
	header("Location:teacher_list.php");
}else{
	echo "Not inserted";
}


?>