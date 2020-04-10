<?php
   include('vendor/autoload.php');
   use App\Interfaces\StudentInformation;
   use App\Abstracts\TeacherInformation;

  echo "<h3>Teacher Information </h3>";
  echo "<hr>";
   $teacher=new TeacherInformation();
   $teacher->profile('Hasan Uddin','hasa@gmail.com','Shenpara ,Mirpur-10')
                   ->getProfile()
                   ->slaray('50','56000')
                   ->getAmount()
                   ->positaon('Head Teacher');



                   echo "<h3>Student Information </h3>";
                   echo "<hr>";
    $student=new StudentInformation();
    $student->StudentProfile('Mirtunjoy','209878','mirtunjoy@gmail.com','Shenpara,Mirpur-10')
                  ->geStudentprofile()
                  ->fee('12','4000')
                  ->getFee()
                  ->AnnualExam('23-4-19')
                  ->getAnnualExam();


?>
