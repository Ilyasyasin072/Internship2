<?php include "koneksi.php";
if(isset($POST['simpan'])); {
$jenis_tanaman = $_POST['jenis_tanaman'];
$ph = $_POST['ph'];
$ppm = $_POST['ppm'];
$db = mysqli_query($db, "INSERT INTO detailnutrisi VALUES (null, '$jenis_tanaman', '$ph','$ppm')") or
die(mysqli_error($db));
if($db) {
    echo "<script>alert('Berhasil disimpan'); window.location=./';</script>";
}
echo "<center><br><br><br><br><br><br><b>Berhasil Disimpan</b><br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='Kembali' onclick=location.href='tampildetail.php'></a></center>";

}
?>