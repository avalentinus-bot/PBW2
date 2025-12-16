<?php
    session_start();
    if(!_SESSION['isLoggedIN'])
    {
        header("Location: form.php");
    }

    include "koneksi.php";
    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    if($stmt)->execute([$_GET['id']])
    {
        header("Location: home.php?page=list");
    }
    else
    {
        echo "<script>alert('user');</script>";
    }