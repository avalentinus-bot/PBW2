<?php 
    session_start();
    if($_SESSION['isLoggedin'])
    {
        header("Location: form.php");
    }

    include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $SESSION['username']?></h1>
    <a href="logout.php">Logout</a>

    <h4>Daftar User</h4>
    <table border=1 cellspacing=0 cellpadding=5>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php
            $rs = $koneksi->query("SELECT*FROM user");
            $users = $rs->fetch();
            print_r($users);
            // foreach( ){

            //}
            ?>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>