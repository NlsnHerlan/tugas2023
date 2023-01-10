<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<body class="container text-center">
    <div class="card text-center position-absolute top-50 start-50 translate-middle" style="width: 20rem;" >
        <h1 class="card-header">Masukan Data</h1>
        <div class="card-body">
        <form action="edit.php" method="POST">
            <div>
             <input type="hidden" nis="nis" name="nis" value="<?= $data['nis']?>">
            </div><br>         
            <div>
                Nama: <input type="text" name="nama" value="<?= $data['nama']?>">
            </div>  <br> 
            <div>
                Kelas: <input type="text" name="kelas" value="<?= $data['kelas']?>">
            </div> <br>
            <div>
                <button class="btn btn-primary">Save</button>
                <p class="card-text">Lihat Data
                 <a href="home.php" class="link">Home</a></p>
            </div>    
        </form>
    </body>
</html>