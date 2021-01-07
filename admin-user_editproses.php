<?php
include "koneksi.php";
            $username       = $_POST['username'];
            $password       = $_POST['password'];
            $email          = $_POST['email'];
            $alamat         = $_POST['address'];
            $telepon        = $_POST['phonenumber'];
            $id             = $_GET['id'];

            $query = mysqli_query($koneksi,"UPDATE akun SET username ='$username', password = '$password', email='$email', alamat='$alamat', telepon='$telepon'  where id_akun = '$id'");

            if ($query > 0) {
            echo "<script>alert('Data Berhasil Disimpan');
                    location='admin-user.php?'</script>\n";
            } else {
            echo "<script>alert('Data Gagal Disimpan');
                    location='admin-user_edit.php?id=$id'</script>\n";
            }

?>