<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3><?= $data["judul"] ?></h3>
            <ul class="list-group">
                <?php foreach ($data["siswa"] as $siswa) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start"><?=$siswa["nama"]?>
                <a href="<?=BASEURL?>/siswa/detail/<?=$siswa['id']?>" class="badge btn btn-primary m-0">detail</a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>