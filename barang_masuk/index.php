
<?php include "sidebar.php" ?>
<h2>Barang Masuk</h2>
<a href="create.php" type="button" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i> Tambah data</a>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID barang</th>
          <th scope="col">ID admin</th>
          <th scope="col">Nama Admin</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Tangal masuk</th>
          <th scope="col">Keterangan</th>
          <th scope="col" class="center">Delete | Lihat</th>
        </tr>
      </thead>
      <tbody>
          <?php 
          $query=mysqli_query ($koneksi,"SELECT * FROM barang_masuk order by id_masuk");
          $no=1;
          while($r= mysqli_fetch_array($query)){
            echo"<tr>
            <th scope='row'>$no</th>
            <td>$r[id_barang]</td>
            <td>$r[id_admin]</td>
            <td>$r[nama_admin]</td>
            <td>$r[jumlah]</td>
            <td>$r[tanggal_masuk]</td>
            <td>$r[keterangan]</td>
            <td>
            <a href='delete.php?id_masuk=$r[id_masuk]' button type='button' class='btn btn-danger' onclick='return confirm('Are You Sure?')'><i class='bi bi-trash'></i></a>
            
            <a href='lihat.php?id_masuk=$r[id_masuk]'button type='button' class='btn btn-success'><i class='bi bi-eye-fill'></i></a>
            </td>
          </tr>";
          $no++;
          }
        ?>
        <!-- <a href='edit.php?id_masuk=$r[id_masuk]'button type='button' class='btn btn-warning'><i class='bi bi-pencil-fill'></i></a> -->
      </tbody>
    </table>
    </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>