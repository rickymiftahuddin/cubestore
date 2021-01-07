<?php
session_start();
$id_barang = $_GET["id"];
unset($_SESSION['keranjang'][$id_barang]);

echo "<script>alert('Items Deleted')</script>";
echo "<script>location='shoping-cart.php'</script>";
?>