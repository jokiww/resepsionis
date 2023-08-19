<?php 
require 'function.php';

// ketika tombol register ditekan,proses fungsi registrasi
if (isset($_POST["register"])) {
    if (registrasi($_POST) >0) {
        echo "
        <script language='JavaScript'>
        swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
                window.location.href = 'login.php';
               }
            );
        </script>";
    }else {
        echo mysqli_error($db);
    }
}
?>