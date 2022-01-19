<?php
class Siswa extends Controller
{
    public function index()
    {
        $data["judul"] = "Daftar siswa";
        $data["siswa"] = $this->model("Siswa_model")->getAllSiswa();
        $this->view("templates/header");
        $this->view("siswa/index", $data);
        $this->view("templates/footer");
    }
    public function detail($id)
    {
        $data["judul"] = "Detail siswa";
        $data["siswa"] = $this->model("Siswa_model")->getSiswaById($id);
        $this->view("templates/header");
        $this->view("siswa/detail", $data);
        $this->view("templates/footer");
    }
    public function tambah() {
        if($this->model("Siswa_model")->tambahDataSiswa($_POST) > 0) {
            Flasher::setFlash("berhasil", "ditambahkan", "success");
            header("Location: " . BASEURL . "/siswa");
            exit;
        } else {
            Flasher::setFlash("gagal", "ditambahkan", "warning");
            header("Location: " . BASEURL . "/siswa");
            exit;
        }
    }
    public function hapus($id) {
        if($this->model("Siswa_model")->hapusDataSiswa($id) > 0) {
            Flasher::setFlash("berhasil", "dihapus", "success");
            header("Location: " . BASEURL . "/siswa");
            exit;
        } else {
            Flasher::setFlash("gagal", "dihapus", "warning");
            header("Location: " . BASEURL . "/siswa");
            exit;
        }
    }
}
