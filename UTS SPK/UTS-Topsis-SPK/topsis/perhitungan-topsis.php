<?php 
	include('../koneksi.php');

	//tabel data kuadrat
	$kuadrat = mysqli_query($conn, "SELECT * FROM tb_kuadrat");

	//tabel data normalisasi
	$normalisasi = mysqli_query($conn, "SELECT * FROM tb_normalisasi");

	//tabel data normalisasi terbobot (nl_bobot)
	$nl_bobot = mysqli_query($conn, "SELECT * FROM tb_nlbobot");

	//tabel data Matriks Sulusi Ideal (msi)
	$msi = mysqli_query($conn, "SELECT * FROM msi");

	//tabel data total
	$total = mysqli_query($conn, "SELECT * FROM total");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SPK by NMW</title>
	<style>
	  body {
	   background-image : url("img/sakura.jpg");
	    background-repeat: no-repeat;
	   background-size:cover;
	  }
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<div class="container-fluid">
		   <a class="navbar-brand" href="#">
		      SPK by NMW
		   </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		<div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="alternatif.php">Data Alternatif</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="kriteria.php">Data Kriteria</a>
		        </li>
		        <li class="nav-item">
		           <a class="nav-link active" aria-current="page" href="nilai-alternatif.php">Nilai Alternatif</a>
		        </li>
		        <li class="nav-item">
		           <a class="nav-link active" aria-current="page" href="perhitungan-topsis.php">Perhitungan</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="../logout.php">Log Out</a>
		        </li>
		    </ul>
		</div>
		</div>
	</nav>

	<div class="row justify-content-around">
	<div class="card text-dark bg-light mb-3" style="max-width: 75rem; margin-top: 35px">
	  <div class="card-body">
	  	<div class="card-body">
    		<h1 class="card-title">Normalisasi</h1>
    		<br>
    		<h5 class="card-title">1. Tabel Kuadrat</h5>
	    	<br>
	    	<table class="table table-bordered">
  				<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">C01</th>
			      <th scope="col">C02</th>
			      <th scope="col">C03</th>
			      <th scope="col">C04</th>
			      <th scope="col">C05</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
  				while ($row = mysqli_fetch_assoc($kuadrat)) : 
  				?>

			    <tr>
			      <td><?php echo $row["kode"];?></td>
			      <td><?php echo $row["c01"];?></td>
			      <td><?php echo $row["c02"];?></td>
			      <td><?php echo $row["c03"];?></td>
			      <td><?php echo $row["c04"];?></td>
			      <td><?php echo $row["c05"];?></td>
			    </tr>

			    <?php 
			    endwhile;
			    ?>
			</table>
			<br>
    		<h5 class="card-title">2. Tabel Normalisasi</h5>
	    	<br>
	    	<table class="table table-bordered">
  				<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">C01</th>
			      <th scope="col">C02</th>
			      <th scope="col">C03</th>
			      <th scope="col">C04</th>
			      <th scope="col">C05</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
  				while ($row = mysqli_fetch_assoc($normalisasi)) : 
  				?>

			    <tr>
			      <td><?php echo $row["kode"];?></td>
			      <td><?php echo $row["c01"];?></td>
			      <td><?php echo $row["c02"];?></td>
			      <td><?php echo $row["c03"];?></td>
			      <td><?php echo $row["c04"];?></td>
			      <td><?php echo $row["c05"];?></td>
			    </tr>

			    <?php 
			    endwhile;
			    ?>
			</table>
			<br>
			<br>
			<h1 class="card-title">Normalisasi Terbobot</h1>
    		<br>
    		<h5 class="card-title">Tabel Normalisasi Terbobot</h5>
	    	<br>
	    	<table class="table table-bordered">
  				<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">C01</th>
			      <th scope="col">C02</th>
			      <th scope="col">C03</th>
			      <th scope="col">C04</th>
			      <th scope="col">C05</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
  				while ($row = mysqli_fetch_assoc($nl_bobot)) : 
  				?>

			    <tr>
			      <td><?php echo $row["kode"];?></td>
			      <td><?php echo $row["c01"];?></td>
			      <td><?php echo $row["c02"];?></td>
			      <td><?php echo $row["c03"];?></td>
			      <td><?php echo $row["c04"];?></td>
			      <td><?php echo $row["c05"];?></td>
			    </tr>

			    <?php 
			    endwhile;
			    ?>
			</table>
			<br>
			<br>
			<h1 class="card-title">Matriks Sulusi Ideal</h1>
    		<br>
    		<h5 class="card-title">Tabel Matriks Sulusi Ideal</h5>
	    	<br>
	    	<table class="table table-bordered">
  				<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">C01 (cost)</th>
			      <th scope="col">C02 (benefit)</th>
			      <th scope="col">C03 (cost)</th>
			      <th scope="col">C04 (benefit)</th>
			      <th scope="col">C05 (benefit)</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
  				while ($row = mysqli_fetch_assoc($msi)) : 
  				?>

			    <tr>
			      <td><?php echo $row["s_ideal"];?></td>
			      <td><?php echo $row["C01_cost"];?></td>
			      <td><?php echo $row["C02_benefit"];?></td>
			      <td><?php echo $row["C03_cost"];?></td>
			      <td><?php echo $row["C04_benefit"];?></td>
			      <td><?php echo $row["C05_benefit"];?></td>
			    </tr>

			    <?php 
			    endwhile;
			    ?>
			</table>
			<br>
			<br>
			<h1 class="card-title">Total</h1>
    		<br>
    		<h5 class="card-title">Tabel Total</h5>
	    	<br>
	    	<table class="table table-bordered">
  				<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Positif</th>
			      <th scope="col">Negatif</th>
			      <th scope="col">Preferensi</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
  				while ($row = mysqli_fetch_assoc($total)) : 
  				?>

			    <tr>
			      <td><?php echo $row["kode"];?></td>
			      <td><?php echo $row["positif"];?></td>
			      <td><?php echo $row["negatif"];?></td>
			      <td><?php echo $row["preferensi"];?></td>
			    </tr>

			    <?php 
			    endwhile;
			    ?>
			</table>
			<br>
			<p class="mt-5 mb-3 text-muted text-center">&copy;SPK by NMW 2021</p>
			</div>
		</div>
	</div>
	</center>
</body>
</html>