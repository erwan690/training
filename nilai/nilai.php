<?php
if (!empty($_POST['angka'])) {
    $nilai = $_POST["angka"];

    if (filter_var($nilai, FILTER_VALIDATE_INT) === 0 || !filter_var($nilai, FILTER_VALIDATE_INT) === false) {
        switch ($nilai) {
            case $nilai >= 80:
            echo "<center>A</center>";
            break;
            case $nilai >= 65 && $nilai < 80:
            echo "<center>B</center>";
            break;
            case $nilai >= 45 && $nilai < 65:
            echo "<center>C</center>";
            break;
            case $nilai >= 30 && $nilai < 45:
            echo "<center>D</center>";
            break;
            case $nilai <= 30:
            echo "<center>E</center>";
            break;
            
            default:
            echo "<center>input tidak valid</center>";
            break;
        }
    } else {
        echo("<center>Input Yang Dimasukan Tidak Tepat </center>");
    }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Nilai</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/gayana.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <p>
          <form method="post" action="nilai.php">
             <div class="input-group">
                <input type="text" class="form-control" name="angka" placeholder="Masukan Nilai">
                <div class="input-group-btn">
                   <button class="btn btn-primary" id="hitung" name="hitung" type="submit">
                      Hitung
                  </button>
              </div>
          </div>
      </form>
  </p>
</div>

</body>
</html>
