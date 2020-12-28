<?php
include_once("application\controllers\Mahasiswaa.php");

$jurusan = Index("SELECT * FROM tb_jurusan");
$fakultas = Index("SELECT * FROM tb_fakultas");

if (isset($_POST["tambah"])) {
    if (Create($_POST) > 0) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil diinput',
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
            text: 'Data gagal diinput',
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
                            <input type="text" class="form-control" id="NIM" placeholder="NIM" name="NIM" required>
                        </div>
                        <div class="form-group">
                            <label for="nm_mahasiswa">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nm_mahasiswa" placeholder="Nama Mahasiswa" name="nm_mahasiswa" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="TempatLahirLahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="TempatLahir" name="Tempat Lahir" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date-input">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="date-input" name="Tanggal Lahir" placeholder="yyyy-mm-dd" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="id_fakultas">Fakultas</label>
                                <select id="id_fakultas" class="form-control" name="id_fakultas" required>
                                    <option selected>Pilih Fakultas</option>
                                    <?php foreach ($fakultas as $data) : ?>
                                        <option value="<?= $data["id_fakultas"] ?>"><?= $data["nm_fakultas"] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id_jurusan">Jurusan</label>
                                <select id="id_jurusan" class="form-control" name="id_jurusan" required>
                                    <option selected>Pilih Jurusan</option>
                                    <?php foreach ($jurusan as $data) : ?>
                                        <option value="<?= $data["id_jurusan"] ?>"><?= $data["nm_jurusan"] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="IPK">IPK</label>
                            <input type="text" class="form-control" id="IPK" placeholder="IPK" name="IPK" required>
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