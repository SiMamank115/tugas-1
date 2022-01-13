<?php
class About {
    public function index($namaDepan = "Faiz",$namaBelakang = "Ramadhan") 
    {
        echo "Hai!, nama saya " . $namaDepan . " " . $namaBelakang;
    }
    public function page () 
    {
        echo "About Page nich";
    }
}