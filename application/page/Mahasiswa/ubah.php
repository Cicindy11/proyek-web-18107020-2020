<?php
include_once("application\controllers\Mahasiswaa.php");

$id = $_GET["id"];

$jurusan = Index("SELECT * FROM tb_jurusan");
$fakultas = Index("SELECT * FROM tb_fakultas");
$mahasiswa = Index("SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = $id");

foreach ($mahasiswa as $mhs) {
    $mhs["NIM"];
    $mhs["nm_mahasiswa"];
    $mhs["TempatLahir"];
    $mhs["TanggalLahir"];
    $mhs["id_fakultas"];
    $mhs["id_jurusan"];
    $mhs["IPK"];
}

if (isset($_POST["tambah"])) {
    if (Update($_POST) > 0) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil diubah',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then(function() {
            window.location.href = 'index.php?halaman=datamhs';
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Data gagal diubah',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        }).then(function() {
            window.location.href = 'index.php?halaman=datamhs';
        });
        </script>";
    }
}
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="NIM">NIM</label>
                            <input type="hidden" name="id_mahasiswa" value="<?= $mhs["id_mahasiswa"] ?>">
                            <input type="text" class="form-control" id="NIM" placeholder="18107040" name="NIM" value="<?= $mhs["NIM"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nm_mahasiswa">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nm_mahasiswa" placeholder="Muhammad Surya Jayadiprana" name="nm_mahasiswa" value="<?= $mhs["nm_mahasiswa"] ?>" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="TempatLahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="TempatLahir" name="TempatLahir" placeholder="Surabaya" value="<?= $mhs["TempatLahir"] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date-input">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="date-input" name="TanggalLahir" data-dd-default-date="<?= date('m/d/Y', strtotime($mhs["TanggalLahir"])) ?>" value="<?= $mhs["TanggalLahir"] ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="id_fakultas">Fakultas</label>
                                <select id="id_fakultas" class="form-control" name="id_fakultas" required>
                                    <?php foreach ($fakultas as $data) : ?>
                                        <?php if ($mhs["id_fakultas"] == $data["id_fakultas"]) : ?>
                                            <option value="<?= $data["id_fakultas"] ?>" selected><?= $data["nm_fakultas"] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $data["id_fakultas"] ?>"><?= $data["nm_fakultas"] ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id_jurusan">Jurusan</label>
                                <select id="id_jurusan" class="form-control" name="id_jurusan" required>
                                    <?php foreach ($jurusan as $data) : ?>
                                        <?php if ($mhs["id_jurusan"] == $data["id_jurusan"]) : ?>
                                            <option value="<?= $data["id_jurusan"] ?>" selected><?= $data["nm_jurusan"] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $data["id_jurusan"] ?>"><?= $data["nm_jurusan"] ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="IPK">IPK</label>
                            <input type="text" class="form-control" id="IPK" placeholder="4.0" name="IPK" value="<?= $mhs["IPK"] ?>" required>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary" name="tambah"><i class="fas fa-save mr-2"></i>Simpan</button>
                            <button type="reset" class="btn btn-info"><i class="fas fa-sync-alt mr-2"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#date-input').dateDropper({
        format: 'Y-m-d',
        modal: true,
        large: true,
        theme: 'leaf',
    });
</script>