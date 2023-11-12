// delete.php

<?php

$id = $_POST['id'];

$conn = mysqli_connect("localhost", "username", "password", "database"); 

$query = "DELETE FROM barang WHERE id=$id";

if(mysqli_query($conn, $query)) {
  echo "Data barang berhasil dihapus";
} else {
  echo "Gagal menghapus data barang: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
