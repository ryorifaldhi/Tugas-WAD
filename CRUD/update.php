// update.php 

<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

$conn = mysqli_connect("localhost", "username", "password", "database");

$query = "UPDATE barang SET nama='$nama', jumlah=$jumlah WHERE id=$id";

if(mysqli_query($conn, $query)) {
  echo "Data barang berhasil diupdate";
} else {
  echo "Gagal memperbarui data barang: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
