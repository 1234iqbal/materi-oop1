<?php



// menampilkan nilai dari sebuah method
class siswa
{
    public function fullname($email)
    {
        return $email;
    }
}

$siswa = new siswa;
echo $siswa->fullname('johan@gmail.com');

// setter and getter
class User
{
    public $value ;

    public function setEmail($email)
    {
        // model pengecekan harus email
        if(filter_var($email , FILTER_VALIDATE_EMAIL)){
            return $this->value = $email;
        }else{
            echo 'ini bukan email';
        }
        
        // model pengecekan harus sesuai email yang berada pada kondisi if
        if($email === "kodingAcademy@gmail.com"){
            return $this->value = $email;
        }else{
            echo 'ini bukan email tepat';
        }

    }

    public function getEmail()
    {
        return $this->value;
    }
}

$user = new User;
$user->setEmail('kodingAcademygmail.com');
echo $user->getEmail();
