<?php
  session_start();
  include('koneksi.php'); 
  

  	$email = $_POST ['email'];
  	$password = MD5($_POST['password']);

  	$query  = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result     = mysqli_query($conn, $query);
	$num_row     = mysqli_num_rows($result);
	
	if (isset($_POST["login"])) {
    try {
        //code...
        if (login($_POST) == false) {
            throw new Exception("email / password wrong !!!");
        }
        header('location: home.php');
        exit;
    } catch (Exception $error) {
        echo "<script>
        alert ('" . $error->getMessage() . "');
            document.location.href = 'login.php';
        </script>";
    }
	}

	if($num_row >=1) {
		$row         = mysqli_fetch_array($result);
	    $_SESSION['id'] = $row['id'];
	    echo "<script>alert('Login Berhasil');window.location='home.php';</script>"; 
	} else {
	    
	    echo "<script>alert('Login Gagal');window.location='login.php';</script>";
	}
?>