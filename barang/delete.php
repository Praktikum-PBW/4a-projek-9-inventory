<?php
include "../koneksi.php";

$id_barang=$_GET['id_barang'];
$sql=mysqli_query ($koneksi,"DELETE FROM barang WHERE id_barang='$id_barang'") or die($koneksi);
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
