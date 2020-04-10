

<?php

$customerInfo = [
['name'=>'Mahfuj','address'=>'Rangpur',
'contact'=>[ 'phone'=> [01737355454,+25454554,65445454],
'email'=>['demo@gmail.com','demo2@gmail.com','demo3@gmail.com'],
'social_media'=>["fb"=>'fb123','tw'=>'twit652','linkdin'=>'linkdin321']
]],

['name'=>'Jamal','address'=>'Dhaka','contact'=>[ 'phone'=> [01737355454,+25454554,65445454],'email'=>['demo@gmail.com','demo2@gmail.com','demo3@gmail.com'],'social_media'=>["fb"=>'fb123','tw'=>'twit652','linkdin'=>'linkdin321']]],

['name'=>'Kamal','address'=>'Dinajpur','contact'=>[ 'phone'=> [01737355454,+25454554,65445454],'email'=>['demo@gmail.com','demo2@gmail.com','demo3@gmail.com'],'social_media'=>["fb"=>'fb123','tw'=>'twit652','linkdin'=>'linkdin321']]],

['name'=>'Ashib','address'=>'Kurigram','contact'=>[ 'phone'=> [01737355454,+25454554,65445454],'email'=>['demo@gmail.com','demo2@gmail.com','demo3@gmail.com'],'social_media'=>["fb"=>'fb123','tw'=>'twit652','linkdin'=>'linkdin321']]],

['name'=>'Ratan','address'=>'Rangpur','contact'=>[ 'phone'=> [01737355454,+25454554,65445454],'email'=>['demo@gmail.com','demo2@gmail.com','demo3@gmail.com'],'social_media'=>["fb"=>'fb123','tw'=>'twit652','linkdin'=>'linkdin321']]],

['name'=>'Miraj','address'=>'Dinajpur','contact'=>[ 'phone'=> [01737355454,+25454554,65445454],'email'=>['demo@gmail.com','demo2@gmail.com','demo3@gmail.com'],'social_media'=>["fb"=>'fb123','tw'=>'twit652','linkdin'=>'linkdin321']]],

['name'=>'Hehedi','address'=>'Dhaka','contact'=>[ 'phone'=> [01737355454,+25454554,65445454],'email'=>['demo@gmail.com','demo2@gmail.com','demo3@gmail.com'],'social_media'=>["fb"=>'fb123','tw'=>'twit652','linkdin'=>'linkdin321']]]
];


echo "<pre>";


echo '<table border>';

 foreach ($customerInfo as $key => $value) {
    echo "<tr>";
              foreach ($value as $key => $valu) {
                echo "<td>";
                          if(is_array($valu)){
                             foreach ($valu as $key => $val) {

                               echo "<table border>";
                                 echo $key;
                                 if(is_array($val)){
                                     foreach($val as $k=>$va){
                                      echo "<tr>";
                                      echo "<td>";
                                       echo "$va";
                                       echo "</td>";
                                       echo "</tr>";
                                     }
                                 }
                                 else{
                                   echo "$val";
                                 }
                                 echo "</table>";
                             }

                          }
                          else {
                            echo "$valu";
                          }
                   echo "</td>";
              }
              echo "</tr>";
 }
echo '</table>'
?>
