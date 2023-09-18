<?php

// koneksi ke databese
$db = mysqli_connect("localhost", "root", "", "resepsionis");


function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($POST)
{
    global $db;
    $NIP = ($_POST["NIP"]);
    $Nama = ($_POST["atas_nama"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);

    $query = "INSERT INTO surat values ('$NIP', '$Nama' , '$pihak' , '$alamat', '$tgl')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function ttambah($POST)
{
    global $db;
    $no_kunjungan = ($_POST["no_kunjungan"]);
    $Nama = ($_POST["atas_nama"]);
    $jekel = ($_POST["jekel"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);
    $jaminan_identitas = ($_POST["jaminan_identitas"]);
    $jenis_kepentingan = ($_POST["jenis_kepentingan"]);
    $tujuan_kedatangan = ($_POST["tujuan_kedatangan"]);
    $notes_kedatangan = ($_POST["notes_kedatangan"]);

    $query = "INSERT INTO surat values ('$no_kunjungan', '$Nama' , '$jekel' , '$pihak' , '$alamat', '$tgl' , '$jaminan_identitas' , '$jenis_kepentingan' , '$tujuan_kedatangan' , '$notes_kedatangan')";
    
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function ltambah($POST)
{
    global $db;
    $id_tlp = ($_POST["id_tlp"]);
    $Nama = ($_POST["atas_nama"]);
    $jekel = ($_POST["jekel"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);
    $no_tlp = ($_POST["no_tlp"]);
    $jenis_kepentingan = ($_POST["jenis_kepentingan"]);
    $penujuan_tlp = ($_POST["penujuan_tlp"]);
    $notes_tlp = ($_POST["notes_tlp"]);

    $query = "INSERT INTO tlp values ('$id_tlp', '$Nama' , '$jekel' , '$pihak' , '$alamat', '$tgl' , '$no_tlp' , '$jenis_kepentingan' , '$penujuan_tlp' , '$notes_tlp')";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($NIP)
{
    global $db;
    mysqli_query($db, "DELETE FROM surat WHERE NIP=$NIP");
    return mysqli_affected_rows($db);
}

function thapus($no_kunjungan)
{
    global $db;
    mysqli_query($db, "DELETE FROM tamu WHERE no_kunjungan=$no_kunjungan");
    return mysqli_affected_rows($db);
}

function lhapus($id_kunjungan)
{
    global $db;
    mysqli_query($db, "DELETE FROM tlp WHERE id_kunjungan=$id_kunjungan");
    return mysqli_affected_rows($db);
}

function ubah($POST)
{
    global $db;
    $NIP = ($POST["NIP"]);
    $Nama = ($POST["atas_nama"]);
    $pihak = ($POST["pihak_instansi"]);
    $alamat = ($POST["alamat_instansi"]);
    $tgl = ($POST["tgl"]);
    $query = "UPDATE surat SET NIP = '$NIP',
                               atas_nama = '$Nama',
                               pihak_instansi = '$pihak',
                               alamat_instansi = '$alamat',
                               tgl = '$tgl'
                               WHERE NIP = $NIP";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function tubah($POST)
{
    global $db;
    $no_kunjungan = ($_POST["no_kunjungan"]);
    $Nama = ($_POST["atas_nama"]);
    $jekel = ($_POST["jekel"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);
    $jaminan_identitas = ($_POST["jaminan_identitas"]);
    $jenis_kepentingan = ($_POST["jenis_kepentingan"]);
    $tujuan_kedatangan = ($_POST["tujuan_kedatangan"]);
    $notes_kedatangan = ($_POST["notes_kedatangan"]);
    $query = "UPDATE tamu SET no_kunjungan = '$no_kunjungan',
                               atas_nama = '$Nama',
                               jekel = '$jekel',
                               pihak_instansi = '$pihak',
                               alamat_instansi = '$alamat',
                               tgl = '$tgl',
                               jaminan_identitas = '$jaminan_identitas',
                               jenis_kepentingan = '$jenis_kepentingan',
                               tujuan_kedatangan = '$tujuan_kedatangan',
                               notes_kedatangan = '$notes_kedatangan'
                               WHERE no_kunjungan = $no_kunjungan";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function lubah($POST)
{
    global $db;
    $id_tlp = ($_POST["id_tlp"]);
    $Nama = ($_POST["atas_nama"]);
    $jekel = ($_POST["jekel"]);
    $pihak = ($_POST["pihak_instansi"]);
    $alamat = ($_POST["alamat_instansi"]);
    $tgl = ($_POST["tgl"]);
    $no_tlp = ($_POST["no_tlp"]);
    $jenis_kepentingan = ($_POST["jenis_kepentingan"]);
    $penujuan_tlp = ($_POST["penujuan_tlp"]);
    $notes_tlp = ($_POST["notes_tlp"]);
    $query = "UPDATE tlp SET id_tlp = '$id_tlp',
                               atas_nama = '$Nama',
                               jekel = '$jekel',
                               pihak_instansi = '$pihak',
                               alamat_instansi = '$alamat',
                               tgl = '$tgl',
                               no_tlp = '$no_tlp',
                               jenis_kepentingan = '$jenis_kepentingan',
                               penujuan_tlp = '$penujuan_tlp',
                               notes_tlp = '$notes_tlp'
                               WHERE id_tlp = $id_tlp";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
function getHashedPasswordFromDatabase($username) {
    $db_connection = new mysqli("localhost", "root", "", "resepsionis");

    if ($db_connection->connect_error) {
        die("Koneksi database gagal: " . $db_connection->connect_error);
    }

    $username = $db_connection->real_escape_string($username);

    $query = "SELECT password FROM users WHERE username = ?";
    $stmt = $db_connection->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);

    if ($stmt->fetch()) {
        // Kata sandi ditemukan dalam database
        $stmt->close();
        $db_connection->close();
        return $hashed_password;
    } else {
        // Pengguna tidak ditemukan dalam database
        $stmt->close();
        $db_connection->close();
        return false;
    }
}




// function registrasi($POST)
// {
//     global $db;

//     $username = strtolower($POST["username"]);
//     $email = mysqli_real_escape_string($db, $POST["email"]);
//     $password = mysqli_real_escape_string($db, $POST["password"]);
//     $password2 = mysqli_real_escape_string($db, $POST["password2"]);
//     $level = mysqli_real_escape_string($db, $POST["level"]);
//     $code = $code = md5($email.date('Y-m-d H:i:s'));


//     // cek username sudah ada atau belum

//     $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

//     if (mysqli_fetch_assoc($result)) {
//         echo "
//         <script language='JavaScript'>
        
//                 window.location.href = '406.php';
               
//         </script>";
//         return false;
//     }

//     // cek konfirmasi password
//     if ($password != $password2) {
//         echo "
//         <script language='JavaScript'>
        
//                 window.location.href = '412.php';
               
//         </script>";
//         return false;
//     }

//     // $password = password_hash($password,PASSWORD_DEFAULT);

//     mysqli_query($db, "INSERT INTO users values ('','$username','$email','$password','$level','$code')");

//     return mysqli_affected_rows($db);
// }
