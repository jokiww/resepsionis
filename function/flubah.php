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
    require '../function.php';
    $id_tlp = $_GET["id_tlp"];
    $tlp = query("SELECT * FROM tlp WHERE id_tlp = $id_tlp")[0];
    // $sql=mysqli_query($siswa);
    // cek button tambah data sudah ditekan atau belom
    if (isset($_POST["submit"])) {
        if (lubah($_POST) > 0) {
            echo "<script language='JavaScript'>
        swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
                window.location.href = 'tlp.php';
               }
            );
        </script>";
        } else {
            echo "<script language='JavaScript'>
        swal('Sorry!', 'Opps, something went wrong. Please try again later.', 'error').then(function(){ 
            window.location.href = 'tlp.php';
           }
        );    
    </script>";
        }
    }

    ?>