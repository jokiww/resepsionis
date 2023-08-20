<?php 
// koneksi db
require '../function.php';
// ambil data query
$result = mysqli_query($db, "SELECT * FROM tamu");
if (!$result) {
    echo mysqli_error($db);
}

?>