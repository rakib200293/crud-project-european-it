<?php
    
    session_start();

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "classproject";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

  if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['tname'];
  $join = $_POST['join'];
  $sell = $_POST['sellary'];
  $sub = $_POST['sub'];
  
  $rand=rand(10000,99999); 

  $errorBag = [];

    if (empty($name)) {
        $errorBag['name_err'] = "Name field is required";
    }elseif(!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $errorBag['name_err'] = "Only letters and white space allowed";
        } 

    if (empty($join)) {
            $errorBag['join_err'] = "Joining date is required";
        }

    if (empty($sell)) {
        $errorBag['sal_err'] = "Salary field is required";
    }
    
    

    if (count($errorBag) > 0) {
        $_SESSION['err'] = $errorBag;
        header("Location:teacher_add.php");
    }
		  
		  else{ 
		$path="uploads/".$rand.'__'.$_FILES['timage']['name'];
		
		 move_uploaded_file($_FILES["timage"]["tmp_name"],$path);
 
 
 $sql = "INSERT INTO teachers Values(NULL,'$name','$join','$sell','$sub','$path')";
 
 if(mysqli_query($conn,$sql)){
	
	header("location:teacher_list.php");
 }else{
	 echo "Not inserted";
 }
}

}

?>