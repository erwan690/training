<html>
     <link href="../css/bootstrap.min.css" rel="stylesheet">
<body>
<p>Sorting Array <br><br></p>

 Isi Setiap Form Yang Tersedia Dengan Number yang memiliki maksimal 4 digit<br>
<form name="form" method="post" action="Input.php">
<pre>
   
<?php for ($i=0; $i < 10; $i++) { ?>
   Angka ke <?php echo $i+1 ?> = <input type="text"  maxlength="4" pattern="\d*" name="angka[<?php $i ?>]"><br>

<?php } ?>
<input type="submit" name="sorting" value="sorting">
<?php
$phi=22/7;
if (!empty($_POST['angka'])) {
    $r=$_REQUEST['angka'];
    $sudah=sortingnumber($r);
}
if (isset ($sudah)) {
    $total = count($sudah);
    for ($i=0; $i < $total; $i++) {
        $no = $i+1;
        echo "Setelah Di Sort Angka ke $no adalah $sudah[$i]<br>";
    }
}


function sortingnumber($data)
{
     $total = count($data);
    for ($i=0; $i < $total; $i++) {
        for ($x=$i; $x < $total; $x++) {
            if ($data[$i]< $data[$x]) {
                $temp=$data[$i];
                $data[$i]=$data[$x];
                $data[$x]=$temp;
            }
        }
    }
    return $data;
}
?>
</pre>
</form>
</body>
</html>