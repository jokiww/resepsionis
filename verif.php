

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- SWEET ALERT -->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

<?php
$db = mysqli_connect("localhost", "root", "", "resepsionis");

$code = $_GET['code'];

if (isset($code)) {
    $qry = $db->query("SELECT * FROM users WHERE verifikasi_code='$code'");
    $result = $qry->fetch_assoc();


    $db->query("UPDATE users SET is_verif=1 WHERE id='" . $result['id'] . "'");
    echo "
        <script language='JavaScript'>
        swal('Success!', 'Verifikasi akun berhasil,Silahkan Login', 'success').then(function(){ 
                window.location.href = 'login.php';
               }
            );
        </script>";
}




?>

</body>

</html>