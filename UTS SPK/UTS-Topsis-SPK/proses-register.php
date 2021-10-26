<?php
 
include('koneksi.php'); 

	if ( isset($_POST['proses']) ) {   
		$nama = $_POST['nama'];
		$password = MD5($_POST['password']);
		$email = $_POST['email'];

		//query insert data
		$query = "INSERT INTO users
		VALUES('','$email','$nama','$password')";

		mysqli_query($conn, $query);

		// cek apakah data berhasil ditambahkan
		if (mysqli_affected_rows($conn ) > 0 ) {
			echo "<script>
				alert('Registrasi Berhasil Silahkan Login');
				document.location.href = 'login.php'
				</script>";
		}
	}
?>