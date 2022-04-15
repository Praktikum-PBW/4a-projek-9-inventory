<?php 
include "../koneksi.php";


if(isset($_POST['create'])){
    $nama_barang = $_POST['nama_barang'];
    $type_barang = $_POST['type_barang'];
    $stok = $_POST['stok'];
    $get_barang = mysqli_query($koneksi,"SELECT * FROM barang where nama_barang='$nama_barang'") or die($koneksi);
    if(mysqli_num_rows($get_barang)>0){
        echo "<script>alert('Barang sudah ada di dalam database!');
		window.location.replace('create.php')</script>";
    }else{
        $sql = mysqli_query($koneksi,"INSERT INTO barang VALUES('','$nama_barang','$type_barang','$stok')") or die($koneksi);
        if ($sql) {
            echo "<script>alert('Data Berhasil dimasukan!');
            window.location.replace('index.php')</script>";
        } else {
            echo "<script>alert('Data Gagal dimasukan!');
            window.location.replace('index.php')</script>";
        }
    }
}

?>

<?php include "sidebar.php" ?>
<h2>Buat Data Barang</h2>
    <form class="class-input" method="post">
    <div class="col">
        <div class="row mt-5">
            <div class="form-group mb-3">
                <label for="nama_barang" class="form-label">Nama barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" required>
            </div>
            <div class="form-group mb-3">
                <label for="type_barang" class="form-label">Type barang</label>
                <input type="text" class="form-control" name="type_barang" id="type_barang" required>
            </div>
            <div class="form-group mb-3">
                <label for="stok" class="form-label">stok</label>
                <input type="number" class="form-control" name="stok" id="stok" required>
            </div>
        </div>
        <a href="index.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Kembali</a>  
        <button type="submit" class="btn btn-success" name="create" onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-file-earmark-plus"></i> Tambah</button>
    </div>
    </form>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

