<?php
if (isset($_GET['halaman'])) {
    $halaman = $_GET['halaman'];

    switch ($halaman) {
        case 'home':
            include "application\page\index.php";
            break;
        case 'datamhs':
            include "application\page\Mahasiswa\index.php";
            break;
        case 'tambahmhs':
            include "application\page\Mahasiswa\add.php";
            break;
        case 'ubahmhs':
            include "application\page\Mahasiswa\ubah.php";
            break;
        case 'hapusmhs':
            include "application\page\Mahasiswa\hapus.php";
            break;
        case 'dosen':
            include "application\page\dosen\index.php";
            break;
    }
} else {
    include "application\page\index.php";
}
