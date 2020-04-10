

<?php

    $host = "localhost";
	$user = 'root';
	$passw = "";
	$db = "classproject";
	
	$con = mysqli_connect($host,$user,$passw,$db);
	
	
	
	
session_start();


if(isset($_SESSION['user_id'])){
 	header('location: index.php');
}else{
	
}

		
		if(isset($_POST['submit']) && !empty(isset($_POST['username'])) && isset($_POST['password']) !=''){

		  $username = $_POST['username'];
		  $password = $_POST['password'];
		  $select = "select * FROM users where username='$username' and password='$password'";
		  
		  $query = mysqli_query($con,$select);
		  $result  = mysqli_fetch_assoc($query);
		  $row  = mysqli_num_rows($query);
		   
		  if($row === 1){
			 echo $_SESSION['user_id'] = $result['user_id'];
			   $_SESSION['username'] = $result['username'];
			    header('location: index.php');
		  }else{
              $error_msg = 'Username and Password was incorrect!';
            //   header('location:login.php');
          }
		  
		  
		}
		?>
 
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body background="BodyBackground.jpg">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                        <?php if (isset($error_msg)) { ?>
                            <div class="alert alert-danger">
                                <?= $error_msg ?>
                            </div>
                        <?php } ?>
					
                        <form role="form"  method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="form-control" type="submit" name="submit" value="login" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
