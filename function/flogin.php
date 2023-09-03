<?php
session_start();

require 'function.php';



if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$_SESSION['login'] = $_POST['login'];



	// cek username ada atau tidak dalam databse
	$result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
	$cek = $result->num_rows;

	// pengecekan verifikasi
	if ($cek > 0) {
		$verif = $result->fetch_assoc();
		if ($verif['is_verif'] == 1) {
			$_SESSION['user'] = $verif;
			echo "
        <script language='JavaScript'>
        swal('Success!', 'Your data have been accepted. Thank you!', 'success').then(function(){ 
			window.location.href = 'index.php';
		}
	);
	</script>";
		}else {
	echo "
    <script language='JavaScript'>
    swal('Sorry!', 'Harap Verifikasi akun anda.', 'error').then(function(){ 
        window.location.href = 'login.php';
       }
    );    
</script>";
		}
	}else {
		echo "<script>
		alert ('Data mengalami kegagalan! Harap ulang kembali');
		document.location.href = 'login.php';
		</script>
		";

		// cek password
	$row = mysqli_fetch_assoc($result);
	if (password_verify($password, $row["password"])) {
		
	}
	}


$error = true;

}

if (isset($error)) :
		
endif;
