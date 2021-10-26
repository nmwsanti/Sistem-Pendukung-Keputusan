<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SPK by NMW</title>
	<style>
	  body {
	   background-image : url("img/mountain.jpg");
	    background-repeat: no-repeat;
	   background-size:cover;
	  }
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#">Tugas3 KPL</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		<div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
			    <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="register.php">Register</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="login.php">Login</a>
		        </li>
		      </ul>
		    </div>
		  </div>
	</nav>
	<center>
	<div class="card text-dark bg-light mb-3" style="max-width: 18rem; margin-top: 65px">
	  <div class="card-body">
	  	<div class="card-body">
    		<h5 class="card-title">Register Akun</h5>
    	<br>
    	<br>
		<form action="proses-register.php" method="post"class="row g-3">
		  <div class="col-12">
		    <label for="email" class="form-label">Email :</label>
		    <input type="email" class="form-control" id="email" name="email">
		  	
		    <label for="nama" class="form-label">Nama :</label>
		    <input type="text" class="form-control" id="nama" name="nama">
		    <label for="password" class="form-label">Password :</label>
		    <input type="password" class="form-control" id="password" name="password">
		  <div class="col-12">
		  </div>
		  <br>
		  <br>
		  <div class="col-12">
		    <button type="submit" value="simpan" name="proses" class="btn btn-primary">Register</button></a>
		  </div>
		</form>
	</div>
	</center>
</body>
</html>