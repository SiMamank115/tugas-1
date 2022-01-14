<?php
class About extends Controller
{
    public function index($namaDepan = "Faiz", $namaBelakang = "Ramadhan")
    {
        $data["namaDepan"] = $namaDepan;
        $data["namaBelakang"] = $namaBelakang;
        $this->view("templates/header");
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }
    public function page()
    {
        $this->view("templates/header");
        $this->view("about/page");
        $this->view("templates/footer");
    }
}
