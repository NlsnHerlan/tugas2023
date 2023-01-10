<?php

    $nis = $_GET['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $database = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    $query = $database->query("update siswa set nama='$nama',kelas='$kelas' where nis='$nis'");

    
    if($query){
        header("Location:home.php");
    }