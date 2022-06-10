<?php
include 'account.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

$query_sql = "INSERT INTO koneksi (nama, username, email, password, no_telp, alamat) 
                                    VALUES ('$nama', '$username', '$email', '$password', '$no_telp', '$alamat')";

if (mysqli_query($conn, $query_sql)) {
      echo "<h1>Username $username berhasil terdaftar</h1>
            <a href='index.html'>Kembali Login</h1>
         ";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
?>
