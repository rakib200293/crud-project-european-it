
<?php
    include_once"database.php";

    class studentclass{

         public function addstudent ($data,$file){
                  $name=$data['name'];
                  $roll=$data['roll'];
                  $reg=$data['registration'];
                  $dept=$data['department'];
                  $shift=$data['shift'];
                  $semester=$data['semester'];
                  $email=$data['email'];
                  $image=$data['image'];
                  $gender=$data['gender'];
                  $image_name=$_FILES['image']['name'];
                  $image_tmp_location=$_FILES['image']['tmp_name'];
                  $image_size=$_FILES['image']['size'];
                  $auto_image_name=time().$image_name;
                  $directory="uploads/$auto_image_name";
                  move_uploaded_file($image_tmp_location, $directory);
                  $query="INSERT INTO tbl_students(name,roll,registration,department,semester,shift,email,image,gender)VALUES ('$name','$roll','$reg',''$dept','$semester','$shift','$email','$auto_image_name','$gender')";
                  $result=$this->db->insert($query);
                  var_dump($result);

         }
   }


?>
