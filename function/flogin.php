<?php
// session_start();
// Setelah validasi login, simpan informasi pengguna dalam sesi
// $user_id = 'id';
// $user_role = 'hak';
// $_SESSION['id'] = $user_id; // Ganti dengan ID pengguna yang sesuai
// $_SESSION['hak'] = $user_role; // Ganti dengan peran pengguna yang sesuai

require './function.php';



if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];




	// $_SESSION['login'] = $_POST['login'];



	// cek username ada atau tidak dalam databse
	$result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

	$cek = mysqli_num_rows($result);

	// pengecekan verifikasi
	if ($cek > 0) {
		$verif = mysqli_fetch_assoc($result);

		if ($verif['is_verif'] == 1) {
			$_SESSION['user'] = $verif;

			// if($verif['hak'] == "admin"){
			// 	$_SESSION['hak'] = "admin";
			// }else if($verif['hak'] == "resepsionis" ){
			// 	$_SESSION['hak'] = "resepsionis";
			// }


			echo "
        <script language='JavaScript'>
        swal('Success!', 'Your data have been accepted. Thank you!', 'success').then(function(){ 
			window.location.href = 'index.php';
		}
	);
	</script>";
		} else if ($verif['is_verif'] == 0){
			$_SESSION['user'] = $verif;
			echo "
    <script language='JavaScript'>
    swal('Sorry!', 'Harap Verifikasi akun anda.', 'error').then(function(){ 
        window.location.href = 'login.php';
       }
    );    
</script>";
		}else if ($verif['hak'] == "petugas") {




			// buat session login dan username
			$_SESSION['username'] = $username;
	
			$_SESSION['hak'] = "petugas";
			// alihkan ke halaman dashboard admin
	
	
			echo "<script>
	alert ('Selamat datang Petugas');
	document.location.href = '../petugas/resepsionis.php';
	</script>
	";
	
			// cek jika user login sebagai petugas 
		} else if ($verif['hak'] == "pendatang") {
	
	
	
			// buat session login dan username 
			$_SESSION['username'] = $username;
	
			$_SESSION['hak'] = "pendatang";
	
			// alihkan ke halaman dashboard petugas 
	
			echo "<script>
	alert ('Selamat datang Tamu Yang Terhormat');
	document.location.href = '../pendatang/tamu/tamu.php';
	</script>
	";
		} else if ($verif['hak'] == "master") {
	
	
	
			// buat session login dan username 
			$_SESSION['username'] = $username;
	
			$_SESSION['hak'] = "master";
	
			// alihkan ke halaman dashboard petugas 
	
			echo "<script>
	alert ('Selamat Datang Wahai Admin Yang Terhormat');
	document.location.href = './index.php';
	</script>
	";
		}else {
	
	
			// alihkan ke halaman login kembali 
			echo "<script>
	alert ('Data mengalami kegagalan! Harap ulang kembali');
	document.location.href = 'login.php';
	</script>
	";}
	// cek password
	
	}

	
	}


	$error = true;



if (isset($error)) :

endif;
