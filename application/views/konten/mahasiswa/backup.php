<form action="" method="POST">
    <div class="col mb-3">
        <div class="row-sm-3">
            <label for="nm_mahasiswa">Nama</label>
        </div>
        <div class="row-sm-9">
            <input type="text" class="form-control" name="nm_mahasiswa" id="nm_mahasiswa" placeholder="Type here" required>
        </div>
    </div>
    <div class="col mb-3">
        <div class="row-sm-3">
            <label for="TempatLahir">Tempat lahir</label>
        </div>
        <div class="row-sm-9">
            <input type="text" class="form-control" name="TempatLahir" id="TempatLahir" placeholder="Type here" required>
        </div>
    </div>
    <div class="col mb-3">
        <div class="row-sm-3">
            <label for="TanggalLahir">Tanggal lahir</label>
        </div>
        <div class="row-sm-9">
            <input type="text" class="form-control" name="TanggalLahir" id="TanggalLahir" placeholder="Type here" required>
        </div>
    </div>
    <div class="col mb-3">
        <div class="row-sm-3">
            <label for="id_jurusan">Jurusan</label>
        </div>
        <div class="row-sm-9">
            <input type="text" class="form-control" name="id_jurusan" id="id_jurusan" placeholder="Type here" required>
        </div>
    </div>
    <div class="col mb-3">
        <div class="row-sm-3">
            <label for="IPK">IPK</label>
        </div>
        <div class="row-sm-10">
            <input type="number" step="any" class="form-control" name="IPK" id="IPK" placeholder="Type here" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary float-right" name="add" id="add">Submit</button>
</form>