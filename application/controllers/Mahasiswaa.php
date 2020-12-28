<?php

function Koneksi()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "dtb_belajar";
    return mysqli_connect($server, $username, $password, $db);
}

function Index($query)
{
    $koneksi = Koneksi();
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function Create($data)
{
    $koneksi = Koneksi();
    $NIM = htmlspecialchars($data["NIM"]);
    $nm_mahassiwa = htmlspecialchars($data["nm_mahasiswa"]);
    $TempatLahir = htmlspecialchars($data["TempatLahir"]);
    $TanggalLahir = htmlspecialchars($data["TanggalLahir"]);
    $id_fakultas = htmlspecialchars($data["id_fakultas"]);
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $IPK = htmlspecialchars($data["IPK"]);

    $query = "INSERT INTO tb_mahasiswa VALUES (null,'$NIM','$nm_mahassiwa','$id_jurusan','$id_fakultas','$TempatLahir','$TanggalLahir','$IPK')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function Update($data)
{
    $koneksi = Koneksi();
    $idmhs = htmlspecialchars($data["id_mahasiswa"]);
    $NIM = htmlspecialchars($data["NIM"]);
    $nm_mahassiwa = htmlspecialchars($data["nm_mahasiswa"]);
    $TempatLahir = htmlspecialchars($data["TempatLahir"]);
    $TanggalLahir = htmlspecialchars($data["TanggalLahir"]);
    $id_fakultas = htmlspecialchars($data["id_fakultas"]);
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $IPK = htmlspecialchars($data["IPK"]);

    $query = "UPDATE tb_mahasiswa SET NIM = '$NIM', nm_mahasiswa = '$nm_mahassiwa', TempatLahir = '$TempatLahir', TanggalLahir = '$TanggalLahir', id_fakultas = '$id_fakultas', id_jurusan ='$id_jurusan',IPK = '$IPK' WHERE id_mahasiswa = $idmhs";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function Delete($id)
{
    $koneksi = Koneksi();
    $query = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = $id";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
