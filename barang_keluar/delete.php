<?php
include "../koneksi.php";

$id_keluar=$_GET['id_keluar'];
$sql=mysqli_query ($koneksi,"DELETE FROM barang_keluar WHERE id_keluar='$id_keluar'") or die($koneksi);
if ($sql){
    echo"
        <script> 
        alert('Data Berhasil dihapus!');
        document.location.href='index.php';
        </script>
    ";
} else{
    echo"
    <script> 
    alert('Data Gagal dihapus!');
    document.location.href='index.php';
    </script>
"; 
}

?>
