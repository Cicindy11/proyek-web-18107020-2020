<?php $i = 1; ?>
<?php echo form_open('mahasiswa/add',array("class"=>"form-horizontal")); ?>
<div class="row">
    <div class="col">
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="nm_mahasiswa">NIM</label>
            </div>
            <div class="row-sm-9">
                <input type="number" class="form-control" name="NIM" id="NIM" placeholder="Type here" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="nm_mahasiswa">Nama</label>
            </div>
            <div class="row-sm-9">
                <input type="text" class="form-control" name="nm_mahasiswa" id="nm_mahasiswa" placeholder="Type here" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="TempatLahir">Tempat lahir</label>
            </div>
            <div class="row-sm-9">
                <input type="text" class="form-control" name="TempatLahir" id="TempatLahir" placeholder="Type here" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="TanggalLahir">Tanggal lahir</label>
            </div>
            <div class="row-sm-9">
                <input type="date" class="form-control" name="TanggalLahir" id="TanggalLahir" placeholder="Type here" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="id_jurusan">Jurusan</label>
            </div>
            <div class="row-sm-9">
                <input type="text" class="form-control" name="id_jurusan" id="id_jurusan" placeholder="Type here" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="IPK">IPK</label>
            </div>
            <div class="row-sm-10">
                <input type="number" step="any" class="form-control" name="IPK" id="IPK" placeholder="Type here" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right" name="add" id="add">Submit</button>
    </div>
    </div>
</div>
<?php echo form_close(); ?>
