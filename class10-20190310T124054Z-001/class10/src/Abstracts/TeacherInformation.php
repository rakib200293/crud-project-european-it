                  <?php

                  namespace App\Abstracts;
                  class TeacherInformation extends Teacher{
                        public $name;
                        public $email;
                        public $address;
                        public $id;
                        public $slaray;

                        public function profile($name,$email,$address){
                                    $this->name=$name;
                                    $this->email=$email;
                                    $this->address=$address;
                                    return $this;
                                    
                        }
                        public function slaray($id,$slaray){
                                    $this->id=$id;
                                    $this->slaray=$slaray;
                                    return $this;

                        }

                        public function getProfile(){

                              echo $this->name.'<br/>';
                              echo $this->email.'<br/>';
                              echo $this->address.'<br/>';
                              return $this;


                        }

                        public function getAmount(){
                                    echo   "($this->id , $this->slaray)";
                                    return $this;
                        }
                  }

                  ?>
