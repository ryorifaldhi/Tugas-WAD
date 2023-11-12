// insert.php

<?php

$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

$conn = mysqli_connect("localhost", "username", "password", "database");

$query = "INSERT INTO barang (nama, jumlah) VALUES ('$nama', $jumlah)";

if(mysqli_query($conn, $query)) {
  echo "Data barang berhasil ditambahkan";
} else {
  echo "Gagal menambahkan data barang: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
