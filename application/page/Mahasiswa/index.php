<?php
include_once("application\controllers\Mahasiswaa.php");

$result = Index("SELECT * FROM tb_mahasiswa");
$jurusan = Index("SELECT * FROM tb_jurusan");
$fakultas = Index("SELECT * FROM tb_fakultas");
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                    <div class="float-right">
                        <a href="index.php?halaman=tambahmhs" class="btn btn-dark"><i class="fas fa-plus mr-2"></i>Tambah Data
                            Mahasiswa</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="mahasiswa">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
                                    <th>IPK</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($result as $rows) : ?>
                                    <tr>
                                        <th><?= $i++ ?></th>
                                        <td><?= $rows["NIM"] ?></td>
                                        <td><?= $rows["nm_mahasiswa"] ?></td>
                                        <td><?= $rows["TempatLahir"] . ", " . date("d F Y", strtotime($rows["TanggalLahir"])) ?>
                                        </td>
                                        <td>
                                            <?php foreach ($fakultas as $fk) : ?>
                                                <?php if ($fk["id_fakultas"] == $rows["id_fakultas"]) : ?>
                                                    <?= $fk["nm_fakultas"] ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td>
                                            <?php foreach ($jurusan as $ju) : ?>
                                                <?php if ($ju["id_jurusan"] == $rows["id_jurusan"]) : ?>
                                                    <?= $ju["nm_jurusan"] ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </td>
                                        <td><?= $rows["IPK"] ?></td>
                                        <td>
                                            <a type="button" class="btn btn-primary btn-sm" href="index.php?halaman=ubahmhs&id=<?= $rows['id_mahasiswa']; ?>"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" onclick="DeleteData()"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#mahasiswa').DataTable();
    });
</script>
<script>
    function DeleteData() {
        // event.preventDefault(); // prevent form submit
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Jika sudah dihapus, Data tidak dapat kembali!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#276CDA',
            cancelButtonColor: '#F03A5F',
            confirmButtonText: 'Hapus',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "index.php?halaman=hapusmhs&id=<?= $rows['id_mahasiswa']; ?>";
            }
        })
    }
</script>