



<?php


    // $i=1;
    // echo ++$i;
    // echo "<br>";
    // echo $i++;
    // echo "<br>";
    // echo $i++;
    // echo "<br>";

    // echo ++$i;
    // echo "<br>";


    // echo $i++;

 

   $array=[
        [1,3,5,7],
        [2,3,5,8],
        [1,15,18,1],
        [8,6,20,50]


   ];
    $nn=count($array);

?>



    

 <?php 
     $student= [
               ['name'=>'Sumi',
               'roll'=>1,
               'dept'=>'computer',
               'contact'=>[
                       'mobile'=>'01785378078',
                       'email'=>'sumi@gmail.com',
                       'fb'=>'sumi7788fb.com'
               ],
            ],


            ['name'=>'padar',
            'roll'=>2,
            'dept'=>'computer',
            'contact'=>[
                    'mobile'=>'01785378070',
                    'email'=>'padar@gmail.com',
                    'fb'=>'padar7788fb.com'
            ],
         ],


         ['name'=>'shadin',
         'roll'=>3,
         'dept'=>'computer',
         'contact'=>[
                 'mobile'=>'01785378077',
                 'email'=>'shadin@gmail.com',
                 'fb'=>'shadin7788fb.com'
         ],
      ],


      ['name'=>'sumon',
      'roll'=>4,
      'dept'=>'computer',
      'contact'=>[
              'mobile'=>'01785378073',
              'email'=>'sumon@gmail.com',
              'fb'=>'sumon7788fb.com'
      ],
   ],

];
 
 



   echo "<table border>" ;
     foreach ($student as $key => $value) {
         echo "<tr>";
         foreach ($value as $key => $val) {
            echo "<td>";

            if(is_array($val)){
                    foreach($val as $v){
                       
                        echo $v.'<br>';
                      
                    }
                }
                    else{
                        echo $val;
                        echo "</td>";
                    }

            }
         

         echo "<tr>";
     }
echo "<table>";
 ?>
