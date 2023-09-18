<?php
session_start();



    require '../function.php';
    $no_kunjungan = $_GET["no_kunjungan"];
    $tamu = query("SELECT * FROM tamu WHERE no_kunjungan = $no_kunjungan")[0];
    // $sql=mysqli_query($siswa);
    // cek button tambah data sudah ditekan atau belom
    if (isset($_POST["submit"])) {
        if (tubah($_POST) > 0) {
            echo "<script language='JavaScript'>
        swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
                window.location.href = 'tamu.php';
               }
            );
        </script>";
        } else {
            echo "<script language='JavaScript'>
        swal('Sorry!', 'Opps, something went wrong. Please try again later.', 'error').then(function(){ 
            window.location.href = 'tamu.php';
           }
        );    
    </script>";
        }
    }

    ?>