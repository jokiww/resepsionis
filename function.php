<?php 

// koneksi ke databese
$db = mysqli_connect("localhost", "root", "", "biodata");

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

    // cek username sudah ada atau belum

    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
    alert ('username sudah terdaftar');
    </script>";
    return false;
    }

    // cek konfirmasi password
    if ($password != $password2) {
        echo "<script>
    alert ('password tidak sesuai');
    </script>";
    return false;
    }

    // $password = password_hash($password,PASSWORD_DEFAULT);
    
    mysqli_query($db,"INSERT INTO user values ('','$username','$password')");

    return mysqli_affected_rows($db);
}


?>