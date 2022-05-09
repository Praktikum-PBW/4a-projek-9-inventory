<?php
include "../koneksi.php";

$id_masuk=$_GET['id_masuk'];
$sql=mysqli_query ($koneksi,"DELETE FROM barang_masuk WHERE id_masuk='$id_masuk'") or die($koneksi);
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
