<?php include "koneksi.php";
if(isset($POST['simpan'])); {
$dosis = $_POST['dosis'];
$jmlh_ppm = $_POST['jmlh_ppm'];
$db = mysqli_query($db, "INSERT INTO forecasting_regresi VALUES (null, '$dosis', '$jmlh_ppm')") or
die(mysqli_error($db));
if($db) {
    echo "<script>alert('Berhasil disimpan'); window.location=./';</script>";
}
echo "<center><br><br><br><br><br><br><b>Berhasil Disimpan</b><br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='Kembali' onclick=location.href='tampilData.php'></a></center>";

}
?>