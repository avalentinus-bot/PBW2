<?php
    session_start();
    if($_SESSION['isLoggedin'])
    {
        header("Location: home.php");
    }


include "koneksi.php";

$uname = $_POST['uname'];
$paswd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE username = ? AND paswd = ? AND active = 1";
$ps = $koneksi->prepare($sql);
$ps->execute([$uname, $paswd]);
$rs = $ps->fetchAll();

if (count($rs) > 0) {

    session_start();

    // Update last login
    $upd = $koneksi->prepare("UPDATE users SET Last_login = NOW() WHERE id = ?");
    $upd->execute([$rs[0]['id']]);

    // Set session
    $_SESSION = [
        'username' => $uname,
        'isLogged' => true,
        'userId'   => $rs[0]['id']
    ];

    header("Location: home.php");
    exit; // sangat disarankan
} 
else {
    echo "login gagal";
}
