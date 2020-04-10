<?php
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "classproject";

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['e_name'];
    $jobid = $_POST['e_id'];
    $desg = $_POST['e_desg'];
    $shift = $_POST['e_shift'];
    $mob = $_POST['e_mob'];
    $email = $_POST['e_email'];
    $rand=time(10000,99999); 
    $com = $_POST['comment'];

    $errorBag = [];

    if (empty($name)) {
        $errorBag['name_err'] = "Name field is required";
    }elseif(!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $errorBag['name_err'] = "Only letters and white space allowed";
        } 

    if (empty($jobid)) {
            $errorBag['jobid_err'] = "Job Id field is required";
        }

    if (empty($desg)) {
        $errorBag['des_err'] = "Designation field is required";
    }

    $q = "SELECT * FROM employee WHERE mobile = '$mob'";
    $r = mysqli_query($con, $q);

    if (empty($mob)) {
        $errorBag['mob_err'] = "Mobile number is required";
    }elseif(!preg_match('/^[0-9]{11}+$/', $mob)) {
        $errorBag['mob_err'] = "Only numbers allowed and no more then 11 digits!";
    }elseif($r->num_rows > 0) {
        $errorBag['mob_err'] = "Mobile number already exist!";
    }

        if (empty($email)) {
            $errorBag['email_err'] = "Email field is required";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorBag['email_err'] = "Invalid email format";
      }

      if (empty($com)) {
        $errorBag['comm_err'] = "Comment field is required";
    }

    if (count($errorBag) > 0) {
        $_SESSION['err'] = $errorBag;
        header("Location:employe_add.php");
    } else {
        $path="uploads/".$rand.'__'.$_FILES['e_image']['name'];
        move_uploaded_file($_FILES["e_image"]["tmp_name"],$path);
        $ad_by = $_SESSION['user_id'];
        $sql = "INSERT INTO employee Values(NULL, '$ad_by', '$name','$jobid','$desg','$shift','$mob','$email','$path','$com')";
        if(mysqli_query($con,$sql)){
            header('location:employe_list.php');
         }else{
             echo "Not Inserted";
         }
    }
}
	
?>
