<?php

// contoh dari public
class User
{
    public $siswa;

    public function fullName($user)
    {
        return $user;
    }
}

$user = new User;
// langsung mengisi ke property / attribute
echo $user->siswa = "koding academy";
// langsung mengisi ke method / function di dalam class
echo $user->fullName('koding academy');

// contoh dari protected
class User
{
    protected $siswa = "test";

    public function fullName($user)
    {
        return $this->siswa = $user;
    }

    public function getSiswa()
    {
        return $this->siswa;
    }
}

$user = new User;

// hasil mengisi ke method
echo $user->getSiswa();
echo $user->fullName("koding academy");
echo $user->fullName("koding");
echo $user->fullName("koding academy");

// hasil mengisi ke property / attribute
echo $user->siswa;
echo $user->siswa = "koding academy";