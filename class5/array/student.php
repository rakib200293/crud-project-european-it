


<?php
// Note:
// 1) Print those data on a table
// 2) Calculate Total Mark individual student
// 3) Calculate average mark
// 4) Calculate Final GPA and Gread

$studentInfo = [
['name'=>'Mahfuj','Roll'=>310264,'mark'=>
[
  ["Banngla"=>80,'GPA'=>5,'Gread'=>'A+'],
  ["History"=>70,'GPA'=>4,'Gread'=>'A+'],
  ["English"=>82,'GPA'=>5,'Gread'=>'A+']
  ]],

['name'=>'Jamal','Roll'=>310269,'mark'=>
[
  ["Banngla"=>80,'GPA'=>5,'Gread'=>'A+'],
  ["History"=>70,'GPA'=>4,'Gread'=>'A+'],
  ["English"=>82,'GPA'=>5,'Gread'=>'A+']
  ]],

['name'=>'Kamal','Roll'=>310268,'mark'=>
[
  ["Banngla"=>80,'GPA'=>5,'Gread'=>'A+'],
  ["History"=>70,'GPA'=>4,'Gread'=>'A+'],
  ["English"=>82,'GPA'=>5,'Gread'=>'A+']
  ]],

['name'=>'Ashib','Roll'=>310262,'mark'=>
[
  ["Banngla"=>80,'GPA'=>5,'Gread'=>'A+'],
  ["History"=>70,'GPA'=>4,'Gread'=>'A+'],
  ["English"=>82,'GPA'=>5,'Gread'=>'A+']
  ]],

['name'=>'Ratan','Roll'=>310263,'mark'=>
[["Banngla"=>80,'GPA'=>5,'Gread'=>'A+'],
["History"=>70,'GPA'=>4,'Gread'=>'A+'],
["English"=>82,'GPA'=>5,'Gread'=>'A+']
]],

['name'=>'Miraj','Roll'=>310261,'mark'=>
[
  ["Banngla"=>80,'GPA'=>5,'Gread'=>'A+'],
  ["History"=>70,'GPA'=>4,'Gread'=>'A+'],
  ["English"=>82,'GPA'=>5,'Gread'=>'A+']
  ]],

['name'=>'Hehedi','Roll'=>310267,'mark'=>
[
  ["Banngla"=>80,'GPA'=>5,'Gread'=>'A+'],
  ["History"=>70,'GPA'=>4,'Gread'=>'A+'],
  ["English"=>82,'GPA'=>5,'Gread'=>'A+']
  ]]
];



   echo "<pre>";

   echo "<table border style='border-collapse:none'>";
   echo "<tr border>";
   echo "<td>Name</td>";
   echo "<td>Roll</td>";
   echo "<td>Marks</td>";

   echo "<tr>";

    echo "<tr>";
    foreach ($studentInfo as $key => $value) {

   echo "<tr>";
             if(is_array($value)){
                 foreach ($value as $key => $valu) {

                   echo"<td>";

                      if(is_array($valu)){
                        $marks=0;
                        $gpa=0;
                          foreach ($valu as $key => $val) {

                            echo "<table border style='border-collapse:none'>";
                       
                            
                            echo "<tr>";

                              if(is_array($val)){

                                 foreach ($val as $key => $va) {
                                   echo "<td>";
                                   echo "$key =".$va;
                                   if($key!='GPA' && $key!='Gread'){
                                         $marks+=$va;
                                   }
                                   if($key=='GPA'){
                                       $gpa+=$va;
                                   }





                                 }


                              }else {
                                echo "$val";
                              }
                               echo "</tr>";
                              echo "</table>";
                          }

                          echo "Toatal Marks ="."$marks";
                         $sizeof_array=sizeof($val);
                         $average_marks=ceil($marks/$sizeof_array);
                         $average_gpa=number_format($gpa/$sizeof_array,2);
                         $average_grade=grade(ceil($marks/$sizeof_array));
                         echo "<br>";
                         echo "Avearge Marks =".$average_marks;
                         echo "<br>";
                         echo "Avearge GPA =".$average_gpa;
                         echo "<br>";
                         echo "Avearge Grade =".$average_grade;

                      }else{
                           echo "$valu";
                      }
                      echo "</td>";

                 }
             }else{
               echo "$value";
             }
             echo "</tr>";

    }
   echo"<table>";



     function grade($result){
       if($result<=100 && $result>=80){
         echo "A+";
       }elseif ($result<=79 && $result>=70) {
         echo "A";
       }
       elseif ($result<=69 && $result>=60) {
         echo "A-";
       }
       elseif ($result<=59 && $result>=50) {
         echo "B";
       }
       elseif ($result<=49 && $result>=40) {
         echo "C";
       }
       elseif ($result<=39 && $result>=33) {
         echo "D";
       }
       elseif ($result<=38 && $result>=0) {
         echo "0";
       }
     }


?>
