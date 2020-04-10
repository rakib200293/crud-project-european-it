<?php

   namespace App\Traits;
   trait Exam{
            public $date;

        public function AnnualExam($date){
                      $this->date= $date;
                      return $this;
        }
        public function getAnnualExam(){
               echo $this->date;
              return $this;
        }
   }

?>
