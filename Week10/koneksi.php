<?php
    $host = 'localhost';//localhost
    $userdb = 'root';
    $passworddb = '';
try{
    $koneksi = new PDO("mysql:host=$host;dbname=pbw10",$userdb,
    $passworddb);
    $koneksi->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
    
}
catch(PDOException $e)
{
    echo "Koneksi Gagal",$e->getMessage();
}