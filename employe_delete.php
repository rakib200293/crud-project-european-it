
<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "classproject";

//Create Connection
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

$id = $_GET['id'];

$q = "SELECT photo FROM employee WHERE employee_id = '$id'";
$r = mysqli_query($conn, $q)->fetch_assoc();

if (file_exists($r['photo'])) {
    unlink($r['photo']);
}

$sql = "DELETE FROM employee WHERE employee_id = $id";
$result = mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql)){
    header("Location:employe_list.php");
}else{
    echo "Can not deleted";
}


?>
