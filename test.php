<?php
if (!empty($_POST['jari'])) {
    $jarina = $_POST["jari"];
    $luas = 3.14 * $jarina * $jarina;
    $kel = 2*(3.14*$jarina);
    echo "<center><strong><U> Dengan Jari-jari : $jarina </u><br> maka:</strong><br>";
    echo " Keliling : $kel <br>";
    echo "Luas linkaran : $luas <br></center>";
}
?>
<html>
<head>
	<title>Luas dan Keliling Lingkaran</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/gayana.css" rel="stylesheet">

</head>
<body>

	<div class="container">
		<img src="asset/img/Lingkaran.png" class="img-rounded">
		<form method="post" action="test.php">
			<div class="input-group">
				<input type="text" class="form-control" name="jari" placeholder="Masukan Jari - Jari Lingkaran">
				<div class="input-group-btn">
					<button class="btn btn-primary" id="hitung" name="hitung" type="submit">
						Hitung
					</button>
				</div>
			</div>
		</form>
	</div>

	

</body>
</html>