<?php 

// koneksi ke databese
$db = mysqli_connect("localhost", "root", "", "resepsionis");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function registrasi($POST) {
    global $db;

    $username = strtolower($POST ["username"]);
    $password = mysqli_real_escape_string($db,$POST ["password"]);
    $password2 = mysqli_real_escape_string($db,$POST ["password2"]);
    $level = mysqli_real_escape_string($db,$POST ["level"]);

    // cek username sudah ada atau belum

    $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
        <script language='JavaScript'>
        
                window.location.href = 'error/406.php';
               
        </script>";
    return false;
    }

    // cek konfirmasi password
    if ($password != $password2) {
        echo "
        <script language='JavaScript'>
        
                window.location.href = 'error/412.php';
               
        </script>";
    return false;
    }

    // $password = password_hash($password,PASSWORD_DEFAULT);
    
    mysqli_query($db,"INSERT INTO users values ('','$username','$password','$level')");

    return mysqli_affected_rows($db);
}


?>