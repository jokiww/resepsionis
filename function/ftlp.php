<?php 
// session_start();
require '../function.php';




// if (!isset($_SESSION['login'])) {
//     echo "
//     <script language='JavaScript'>
//     swal('Sorry!', 'Silahkan Login Terlebih Dahulu.', 'error').then(function(){ 
//         window.location.href = '../login.php';
//        }
//     );    
// </script>";
// exit;
// }


if (isset($_POST['login'])) {
    $username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
$result = mysqli_query($db, "SELECT username,password,level FROM users WHERE username = '$username' AND password = '$password'");
$cek = $result->num_rows;
$fetchData = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if ($_SESSION['level'] != 1  ) {
    echo "<script>
		alert ('Anda tidak mempunyai hak akses!');
		</script>
		";
}
}






// koneksi db
// ambil data query
$result = mysqli_query($db, "SELECT * FROM tlp ORDER BY id_tlp DESC");
if (!$result) {
    echo mysqli_error($db);
}



?>