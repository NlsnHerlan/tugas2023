<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
   
<a href="form.php" class="link">Tambah</a></p>
<table border="1" cellpadding="10" cellspacing="1" class="table table-success table-striped">
  <thead>
    <tr style="text-align:center;" >
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
  </thead>
</body>
</html>

<?php
   include 'session.php';
//    $koneksi = new PDO("mysql:host=localhost;dbname=pdo",'root','');
//    if(isset($_GET['urut'])){ 
//        $urut = $_GET['urut'];
//        $query = $database->query("select * from perjalanan order by $urut asc");
//    }
    
    $query = $koneksi->query("select * from siswa")
    ?>

    <?php

   while ($data = $query->fetch() ) :?>


   <tr style="text-align:center;" >
       <td><?= $data['nis']?></td>
       <td><?= $data['nama']?></td>
       <td><?= $data['kelas']?></td>
       <td><a href="formedit.php?nis=<?=$data['nis']; ?>" class="btn btn-primary">Update</a></td>
       <td><a href="hapus.php?nis=<?=$data['nis']; ?>"  class="btn btn-danger">Hapus</a></td>
   </tr>

   </a>



<?php endwhile ?>
</table>