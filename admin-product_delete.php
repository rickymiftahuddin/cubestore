<?php
include "koneksi.php";

$id	= $_GET['id'];

$query = mysqli_query($koneksi,"DELETE from barang where id_barang='$id'");

if ($query) {
echo "<script>alert('Data Berhasil Dihapus');
     location='admin-product.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Dihapus');
	  location='admin-product.php'</script>\n";
}
?>