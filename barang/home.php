<?php
include "../koneksi.php";
require "../session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Barang</title>
    <style>
      .hidetext { -webkit-text-security: disc; }
    </style>
</head>
<body>
<div class="container">
<div class="col mt-5 justify-content-end">
<a href="create.php" type="button" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i> Tambah data</a>
</div> 

<div class="col">
  <div class="row">
    <table class="table mt-2">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Id admin</th>
          <th scope="col">Nama barang</th>
          <th scope="col">Type barang</th>
          <th scope="col">Jumlah</th>
          <th scope="col" class="center">Delete | Edit | Lihat</th>
        </tr>
      </thead>
      <tbody>
          <?php 
          $query=mysqli_query ($koneksi,"SELECT * FROM barang order by id_barang");
          $no=1;
          while($r= mysqli_fetch_array($query)){
            echo"<tr>
            <th scope='row'>$no</th>
            <td>$r[id_admin]</td>
            <td>$r[nama_barang]</td>
            <td>$r[type_barang]</td>
            <td>$r[jumlah]</td>
            <td> 
            <a href='delete.php?id_barang=$r[id_barang]' button type='button' class='btn btn-danger' onclick='return confirm('Are You Sure?')'><i class='bi bi-trash'></i></a>
            <a href='edit.php?id_barang=$r[id_barang]'button type='button' class='btn btn-warning'><i class='bi bi-pencil-fill'></i></a>
            <a href='lihat.php?id_barang=$r[id_barang]'button type='button' class='btn btn-success'><i class='bi bi-eye-fill'></i></a>
            </td>
           
          </tr>";
          $no++;
          }
        ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>