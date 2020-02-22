<?php

require "vendor/autoload.php";

// contoh penulisan sebuah class
class siswa
{
    //contoh dari sebuah properties
    public $kelas = "fisika";

    // contoh dari sebuah method
    function guru()
    {
        return "hello world";
    }

}

class guru
{
    public $kelas = "bahasa indonesia";

    function guru()
    {
        return "koding";
    }

}

// contoh penulisan sebuah object
$data = new siswa;

// contoh mengganti nilai sebuah properties dari sebuah class
echo $data->kelas = "bahasa inggris";
