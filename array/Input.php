<html>
<body>
<p>Sorting Array <br><br></p>

 Isi Setiap Form Yang Tersedia Dengan Number yang memiliki maksimal 4 digit<br>
<form name="form" method="post" action="Input.php">
<pre>
   
<?php for ($i=0; $i < 10; $i++) { ?>
   Angka ke <?php echo $i+1 ?> = <input type="text" pattern="[0-9]{4}" name="angka[<?php $i ?>]"><br>

<?php } ?>
<input type="submit" name="sorting" value="sorting">
<?php
$phi=22/7;
if (!empty($_POST['angka'])) {
    $r=$_REQUEST['angka'];
    rsort($r);

    $total = count($r);
}
extract($_POST);
if (isset ($sorting)) {
    for ($i=0; $i < $total; $i++) {
        $no = $i+1;
        echo "Setelah Di Sort ke $no adalah $r[$i]<br>";
    }
}
?>
</pre>
</form>
</body>
</html>