<?php
   namespace App\Interfaces;
   use App\Interfaces\Student;
   use App\Traits\Exam;
   class StudentInformation implements Student{
         public $name;
         public $roll;
         public $email;
         public $address;
         public $id;
         public $fee;
         use Exam;
         public function StudentProfile($name,$roll,$email,$address){
                           $this->name=$name;
                           $this->roll=$roll;
                           $this->email=$email;
                           $this->address=$address;
                           return $this;

         }
         public function fee($id,$fee){
                           $this->id=$id;
                           $this->fee=$fee;
                           return $this;
         }

          public function geStudentprofile(){
                echo "$this->name"."<br/>";
                echo $this->roll."<br/>";
                echo $this->email ."<br/>";
                 return $this;
          }
          public function getFee(){
              echo "$this->id"."<br/>";
              echo "$this->fee"."<br/>";;
              return $this;
          }

   }

?>
