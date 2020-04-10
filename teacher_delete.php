
<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	
	$id = $_GET['id'];

	$q = "SELECT teacher_pic  FROM teacher WHERE techer_id = '$id' ";
	$r = mysqli_query($comm,$q)->fetch_assoc();

	if(file_exists($r['teacher_pic'])){
		unlink($r['techer_pic']);
	}
	
	$sql = "DELETE FROM teachers WHERE teacher_id = $id";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_query($conn,$sql)){
		header("Location:teacher_list.php");
	}else{
		echo "Can not deleted";
	}
	
  
?>
