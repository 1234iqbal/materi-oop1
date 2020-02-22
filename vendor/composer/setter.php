<?php

// setter getter and encasulation

// class User
// {

//     protected $ruangan;
//     public function setEmail($kelas)
//     {
//         if (!filter_var($kelas, FILTER_VALIDATE_EMAIL)) {
//             return;
//         }
//         $this->ruangan = $kelas;
//     }
//     public function getEmail(){
//         return strtolower($this->ruangan);
//     }
// }

// $user = new User;
// $user->setEmail('Mifjak@gmail.com');
// echo $user->getEmail();



// inheritance

// class Model
// {

// }

// class User extends Model
// {
//     protected $createdAt = '2018-01-01 12:00:00';

//     public function getCreatedAt()
//     {
//         return new DateTime($this->createdAt);
//     }
// }

// class Comment extends Model
// {
//     protected $createdAt = '2018-01-01 12:00:00';

//     public function getCreatedAt()
//     {
//         return new DateTime($this->createdAt);
//     }
// }

// $user = new User;
// var_dump($user->getCreatedAt());


// inheritance

// buat class komputer
// class komputer {

//    protected function beli_komputer() {
//      return "Beli komputer baru";
//    }

// }
  
// // turunkan class komputer ke laptop
// class laptop extends komputer {

//    protected function beli_laptop() {
//      return "Beli laptop baru";
//    }

// }
  
// // turunkan class laptop ke chromebook
// class chromebook extends laptop {

//    private function beli_chromebook() {
//      return "Beli chromebook baru";
//    }
  
//    public function beli_semua(){
//      $a = $this->beli_komputer();
//      $b = $this->beli_laptop();    
//      $c = $this->beli_chromebook();
//      return "$a <br /> $b <br /> $c";
//    }

// }
  
// // buat objek dari class laptop (instansiasi)
// $gadget_baru = new chromebook();
  
// //panggil method objek
// echo $gadget_baru->beli_semua();