$(function () {
    $(".ubahButton").on("click",() => {
        $("#judulmodal").html("Ubah data siswa")
        $(".submitButton").html("Ubah")
    })
    $(".tambahButton").on("click",() => {
        $("#judulmodal").html("Tambah data siswa")
        $(".submitButton").html("Tambah")
    })
})