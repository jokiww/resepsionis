<?php

require 'function.php';

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];



	// cek username ada atau tidak dalam databse
	$result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

	// cek ada berapa baris username yang dikembalikan dari perintah SELECT
	if (mysqli_num_rows($result) === 1) {
		echo "
        <script language='JavaScript'>
        swal('Success!', 'Your data have been accepted. Thank you!', 'success').then(function(){ 
                window.location.href = 'home1.php';
               }
            );
        </script>";
	} else {
		echo "<script>
    alert ('Data mengalami kegagalan! Harap ulang kembali');
    document.location.href = 'login.php';
    </script>
    ";

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}

if (isset($error)) :

endif;

?>