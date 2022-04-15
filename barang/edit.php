<?php
include "../koneksi.php";

$id_barang=$_GET['id_barang'];
$query=mysqli_query ($koneksi," SELECT * FROM barang WHERE id_barang='$id_barang'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $nama_barang=$_POST['nama_barang'];
    $type_barang=$_POST['type_barang'];
    $stok=$_POST['stok'];
    $sql=mysqli_query($koneksi,"UPDATE barang SET nama_barang='$nama_barang', type_barang='$type_barang', stok='$stok' WHERE id_barang='$id_barang'" ) or die($koneksi);
    if ($sql){
        echo"
            <script> 
            alert('Data Berhasil diedit!');
            document.location.href='index.php';
            </script>
        ";
    } else{
        echo"
        <script> 
        alert('Data Gagal diedit!');
        document.location.href='index.php';
        </script>
    "; 
    }
}
?>
<?php include "sidebar.php" ?>
<h2>Edit Data Barang</h2>
    <div class="col">
            <div class="row mt-5">
                <form class="form-input" method="POST">
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama barang</label>
                    <input type="text" name="nama_barang" value="<?php echo $r['nama_barang']?>" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="type_barang" class="form-label">Type barang</label>
                    <input type="text" name="type_barang" value="<?php echo $r['type_barang']?>" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">stok</label>
                    <input type="text" name="stok" value="<?php echo $r['stok']?>" class="form-control" >
                </div>
                <a href="index.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Kembali</a>  
                <button type="submit" class="btn btn-success" name="edit" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-file-earmark-plus"></i> Simpan</button>    
            </form>                                     
        </div>
    </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

