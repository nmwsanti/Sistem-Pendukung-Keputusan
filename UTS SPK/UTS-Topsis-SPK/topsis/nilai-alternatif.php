<?php 
	include('../koneksi.php');

	//tabel data kriteria
	$nilai_alter = mysqli_query($conn, "SELECT * FROM alternatif_score");
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

	<center>
	<div class="card text-dark bg-light mb-3" style="max-width: 75rem; margin-top: 35px">
	  <div class="card-body">
	  	<div class="card-body">
    		<h1 class="card-title">Daftar Nilai Alternatif</h1>
	    	<br>
	    	<table class="table table-bordered">
  				<thead>
			    <tr>
			      <th scope="col">NIM</th>
			      <th scope="col">C01</th>
			      <th scope="col">C02</th>
			      <th scope="col">C03</th>
			      <th scope="col">C04</th>
			      <th scope="col">C05</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
  				while ($row = mysqli_fetch_assoc($nilai_alter)) : 
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
			<p>Rentang Nilai IPK :<br>
			Nilai 1 untuk nilai <= 2<br>
			Nilai 2 untuk nilai <= 2.5<br>
			Nilai 3 untuk nilai <= 3<br>
			Nilai 4 untuk nilai <= 3.5<br>
			Nilai 5 untuk nilai > 3.5</p>
			<p class="mt-5 mb-3 text-muted text-center">&copy;SPK by NMW 2021</p>
			</div>
		</div>
	</div>
	</center>
</body>
</html>