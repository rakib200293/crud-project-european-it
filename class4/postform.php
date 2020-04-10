<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

   <div class="container">
     <div class="row">
       <div class="col-md-6 offset-3 bordered mt-3 p-3 bg-dark post_form">

   <form class="" action="showresultpost.php" method="post" enctype="multipart/form-data">
     <h3>Student Form- Post Method</h3>
         <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control"value="">
         </div>

         <div class="form-group">
              <label for="">Roll</label>
              <input type="text" name="roll" class="form-control"value="">
         </div>

         <div class="form-group">
              <label for="">Registration</label>
              <input type="text" name="registration" class="form-control"value="">
         </div>

         <div class="form-group">
              <label for="">Department</label>
              <select class="form-control" name="department">
                  <option value="">Select your department</option>
                 <option value="Computer">Computer</option>
                 <option value="Electrical">Electrical</option>
                 <option value="Electonic">Electonic</option>
                 <option value="Civil">Civil</option>
                 <option value="Food">Food</option>

              </select>
         </div>
         <div class="form-group">
              <label for="">Shift</label>
              <select class="form-control" name="shift">
                <option value="">Select your shift</option>

                 <option value="1st">1st</option>
                 <option value="2nd">2nd</option>

              </select>
         </div>
         <div class="form-group">
              <label for="">Semester</label>
              <select class="form-control" name="semester">
                <option value="">Select your semester</option>
                 <option value="First">First</option>
                 <option value="Second">Second</option>
                 <option value="Third">Third</option>
                 <option value="Fourth">Fourth</option>
                 <option value="Five">Five</option>
                 <option value="Six">Six</option>
                 <option value="Seven">Seven</option>


              </select>
         </div>
         <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" class="form-control"value="">
         </div>
         <div class="form-group">
              <label for="">Image</label>
              <input type="file" name="image" class="form-control"value="">
         </div>
         <div class="form-group">
              <label for="">Gender</label>
              <input type="radio" name="gender" value="Male">Male
              <input type="radio" name="gender" value="Female">Female
         </div>

         <div class="form-group">

              <input type="submit" name="btn_post" class="form-control btn btn-success"value="Submit">
         </div>
   </form>

       </div>

     </div>

   </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
