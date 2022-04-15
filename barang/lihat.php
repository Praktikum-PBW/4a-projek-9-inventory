<?php
include "../koneksi.php";

$id_barang=$_GET['id_barang'];
$query=mysqli_query ($koneksi," SELECT * FROM barang WHERE id_barang='$id_barang'");
$r=mysqli_fetch_array($query);

?>
<?php include "sidebar.php" ?>
<h2>Buat Data Barang</h2>
    <div class="col">
        <div class="row mt-5">
        <form class="form-input" method="POST"> 
    <div class="mb-3">
        <label for="id_barang" class="form-label">ID barang</label>
        <input type="text" name="id_barang" value="<?php echo $r['id_barang']?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama barang</label>
        <input type="text" name="nama_barang" value="<?php echo $r['nama_barang']?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
        <label for="type_barang" class="form-label">Type barang</label>
        <input type="text" name="type_barang" value="<?php echo $r['type_barang']?>" class="form-control" readonly>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">stok</label>
        <input type="text" name="stok" value="<?php echo $r['stok']?>" class="form-control" readonly>
    </div>
    <a href="index.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Kembali</a>                                         
    </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

