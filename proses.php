
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
$nama = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$code = md5($email . date('Y-m-d H:i:s'));
$hak = $_POST['hak'];


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jokoapriliyanto578@gmail.com';                     //SMTP username
    $mail->Password   = 'qhrophhazmimjgdo';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@FablesCompany.com', 'Mr.Joko');
    $mail->addAddress($_POST['email'], $_POST['username']);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verifikasi Akun';
    $mail->Body    = 'Hi! <b>' . $nama . '</b><br> Terima kasih sudah mendaftar di website kami,<br>segala informasi pribadi anda akan kami jaga dan tidak akan kami bocorkan.<br> Mohon Verifikasi akun anda!<br> <a href="http://localhost/resepsionis/verif.php?code=' . $code . '">Verifikasi</a>';


    if ($mail->send()) {
        $cek = mysqli_num_rows(mysqli_query($db,"SELECT * FROM users WHERE email='$email'"));
        if ($cek > 0){
            echo "<script>
            window.location='406.php'</script>";
            } else {
                $db->query("INSERT INTO users values ('','$nama','$email','$password','$code','','$hak')");

                echo "
                    <script language='JavaScript'>
                    swal('Registrasi Berhasil!', 'Silahkan cek email anda untuk verifikasi akun', 'success').then(function(){ 
                            window.location.href = 'login.php';
                           }
                        );
                    </script>";
            }
            
            




        
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



?>

</body>

</html>