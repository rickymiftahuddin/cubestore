<?php
include "koneksi.php";

$id	= $_GET['id'];


$query = mysqli_query($koneksi,"DELETE from akun where id_akun='$id'");

if ($query) {
echo "<script>alert('Data Berhasil Dihapus');
     location='admin-user.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Dihapus');
	  location='admin-user.php'</script>\n";
}
?>