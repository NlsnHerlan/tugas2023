<?php

    $nis = $_GET['nis'];

    $database = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    $query = $database->query("delete from siswa where nis='$nis'");

    
    if($query){
        header("Location:home.php");
    }