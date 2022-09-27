<?php

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];


$db = new PDO("mysql:host=localhost;dbname=sekolahku", 'root', '');
$query = $db->query("UPDATE `siswa` SET nis='$nis',nama='$nama', kelas='$kelas' where nis='$nis'");

if($query){
    header("location:index.php");
}