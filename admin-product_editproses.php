<?php
include "koneksi.php";

$foto1 = $_FILES['picture1']['name'];
$fotofix1 = date("YmdHis").'-1-'.$foto1;
$ukuranfoto1 = $_FILES['picture1']['size'];
$errorfoto1 = $_FILES['picture1']['error'];
$tmpname1 = $_FILES['picture1']['tmp_name'];
move_uploaded_file($tmpname1, 'images/products/'.$fotofix1);

$foto2 = $_FILES['picture2']['name'];
$fotofix2 = date("YmdHis").'-2-'.$foto2;
$ukuranfoto2 = $_FILES['picture2']['size'];
$errorfoto2 = $_FILES['picture2']['error'];
$tmpname2 = $_FILES['picture2']['tmp_name'];
move_uploaded_file($tmpname2, 'images/products/'.$fotofix2);

$foto3 = $_FILES['picture3']['name'];
$fotofix3 = date("YmdHis").'-3-'.$foto3;
$ukuranfoto3 = $_FILES['picture3']['size'];
$errorfoto3 = $_FILES['picture3']['error'];
$tmpname3 = $_FILES['picture3']['tmp_name'];
move_uploaded_file($tmpname3, 'images/products/'.$fotofix3);


            $kategori               = $_POST['categories'];
            $nama_barang            = $_POST['productname'];  
            $harga                  = $_POST['price'];
            $deskripsisingkat       = $_POST['shortdescription'];
            $deskripsilengkap       = $_POST['longdescription'];
            $manufacturer           = $_POST['manufacturer'];
            $type                   = $_POST['type'];
            $dimension              = $_POST['dimension'];
            $weight                 = $_POST['weight'];
            $releasedate            = $_POST['releasedate'];
            $stok                   = $_POST['stock'];
            $id                     = $_GET['id'];

            $query = mysqli_query($koneksi,"UPDATE barang SET 
            kategori_barang ='$kategori', 
            nama_barang = '$nama_barang', 
            foto1='$fotofix1', 
            foto2='$fotofix2', 
            foto3='$fotofix3',
            harga='$harga',
            deskripsisingkat='$deskripsisingkat',
            deskripsilengkap='$deskripsilengkap',
            manufacturer='$manufacturer',
            type='$type',
            dimension='$dimension',
            weight='$weight',
            releasedate='$releasedate',
            stok='$stok'  
            where id_barang = '$id'");

            if ($query > 0) {
            echo "<script>alert('Data Berhasil Disimpan');
                    location='admin-product.php'</script>\n";
            } else {
            echo "<script>alert('Data Gagal Disimpan, HARAP PERIKSA CHARACTER YANG DIGUNAKAN, JANGAN SAMPAI ADA '\ dll');
                    location='admin-product_edit.php?id=$id'</script>\n";
            }

?>