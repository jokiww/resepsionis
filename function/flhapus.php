<?php 
session_start();

if (!isset($_SESSION['login'])) {
    echo "
    <script language='JavaScript'>
    swal('Sorry!', 'Silahkan Login Terlebih Dahulu.', 'error').then(function(){ 
        window.location.href = '../login.php';
       }
    );    
</script>";
exit;
}

$db = mysqli_connect("localhost", "root", "", "resepsionis");
$no_kunjungan = $_GET['id_tlp'];

$result = mysqli_query($db, "DELETE FROM tlp WHERE id_tlp=$no_kunjungan");


if (mysqli_affected_rows($db) > 0) {
    echo "
    <script language='JavaScript'>
    swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
            window.location.href = '../tlp/tlp.php';
           }
        );
    </script>";
} else {
    echo "
    <script language='JavaScript'>
    swal('Sorry!', 'Opps, something went wrong. Please try again later.', 'error').then(function(){ 
        window.location.href = '../tlp/tlp.php';
       }
    );    
</script>";
}

return mysqli_affected_rows($db);

?>