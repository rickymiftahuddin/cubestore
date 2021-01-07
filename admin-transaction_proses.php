<?php
include "koneksi.php";

$id	= $_GET['id'];
$query = $koneksi->query("SELECT * from transaksi where id_transaksi='$id'");
$data = $query->fetch_assoc();
$status = $data['status_transaksi'];

    if ($status=="Waiting for Confirmation") {

        $koneksi->query("UPDATE transaksi set status_transaksi = 'Delivery' where id_transaksi = '$id' ");
 
        echo "<script>alert('Pembayaran telah dikonfirmasi');</script>";
        echo "<script>location='admin-transaction.php';</script>";
        
    }elseif ($status=="Delivery"){
        $koneksi->query("UPDATE transaksi set status_transaksi = 'Done' where id_transaksi = '$id' ");
  
        echo "<script>alert('Transaksi telah selesai');</script>";
        echo "<script>location='admin-transaction.php';</script>";
    }
?>