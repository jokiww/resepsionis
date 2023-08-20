<?php
    require '../function.php';
    $NIP = $_GET["NIP"];
    $surat = query("SELECT * FROM surat WHERE NIP = $NIP")[0];
    // $sql=mysqli_query($siswa);
    // cek button tambah data sudah ditekan atau belom
    if (isset($_POST["submit"])) {
        if (ubah($_POST) > 0) {
            echo "<script language='JavaScript'>
        swal('Success!', 'Your data have been saved. Thank you!', 'success').then(function(){ 
                window.location.href = 'surat.php';
               }
            );
        </script>";
        } else {
            echo "<script language='JavaScript'>
        swal('Sorry!', 'Opps, something went wrong. Please try again later.', 'error').then(function(){ 
            window.location.href = 'surat.php';
           }
        );    
    </script>";
        }
    }

    ?>