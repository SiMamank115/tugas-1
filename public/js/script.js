$(function () {
    $(".tambahButton").on("click",() => {
        $("#judulmodal").html("Tambah data siswa")
        $(".submitButton").html("Tambah")
    })
    $(".ubahButton").on("click",function () {
        $("#judulmodal").html("Ubah data siswa")
        $(".submitButton").html("Ubah")
        $(".modal-body form").attr("action","http://localhost/tugas-1/public/siswa/ubah")
        let id = $(this).data('id')
        $.ajax({
            url:"http://localhost/tugas-1/public/siswa/getubah",
            data: {id:id},
            method:"post",
            dataType:"json",
            success: (e) => {
                $("#nama").val(e.nama)
                $("#kelas").val(e.kelas)
                $("#email").val(e.email)
                $("#jurusan").val(e.jurusan)
                $("#id").val(e.id)
            }
        })
    })
})