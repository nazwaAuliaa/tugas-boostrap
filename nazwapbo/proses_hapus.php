<?php

$nis = $_GET['nis'];

$db = new PDO("mysql:host=localhost;dbname=sekolahku", 'root', '');
$query = $db->query("DELETE FROM siswa WHERE nis='$nis'");

if($query){
    header("location:index.php");
}