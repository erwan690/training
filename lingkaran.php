<html>
<body>
<p>MENGHITUNG LUAS DAN KELILING LINGKARAN <br><br></p>
<form name="form1" method="post" action="lingkaran.php">
<pre>
jari-jari=<input type="text" name="jari"><br>
<input type="submit" name="hitung" value="Hitung">
<?php
$phi=22/7;
if (!empty($_POST['jari'])) {
    $r=$_REQUEST['jari'];
    $luas=$phi*$r*$r;
    $keliling= $phi*($r+$r);
}

extract($_POST);
if (isset ($hitung)) {
    echo "Luasnya lingkaran dengan jari-jari $r adalah $luas.
keliling lingkaran dengan jari-jari $r adalah $keliling";
}
?>
</pre>
</form>
</body>
</html>