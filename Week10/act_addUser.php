<?php
include "koneksi.php";

$usr = $_POST['username'];
$paswd = $_POST['paswd'];
$cpaswd = $_POST['cpaswd'];

if($paswd == $cpaswd)
{
    $npaswd = password_hash($paswd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username,paswd,active) VALUES(?,?,?)";
    $stmt = $koneksi->prepare($sql);
    if($stmt->execute([$usr,$npaswd,1]))
    {
        echo "<script>alert('user baru berhasil ditambah');</script>";
    }
    else
    {
        echo "<script>alert('user baru gagal ditambah');</script>";
    }
    header("location: home.php?page=list");
}
else
{
    echo "<script>alert('password dan konfirmasi password harus sama');</script>";
}