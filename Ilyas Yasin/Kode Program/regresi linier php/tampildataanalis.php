<?php include "header.php";?>
<center>
<table class="data" border="1" style="border-collapse; collapse; margin-bottom: 5px;">
<tr>
<th>No</th>
<th>Dosis Pupuk</th>
<th>Jumlah Nutrisi PPM</th>
</tr>
<?php $db = mysqli_query($db, "SELECT * FROM forecasting_regresi") or die(mysqli_error($db));
if (mysqli_num_rows($db) > 0) {
    $x = 0;
    $y = 0;
    $jumlah_x = 0;
    $jumlah_y = 0;
    $jumlah_x2 = 0;
    $jumlah_y2 = 0;
    $jumlah_xy = 0;
    while ($data = mysqli_fetch_array($db)) {    
        $jumlah_x +=  $data['dosis'];
        $jumlah_y += $data['jmlh_ppm'];
        $jumlah_x2 += ($data['dosis'] * $data['dosis']);
        $jumlah_y2 += ($data['jmlh_ppm'] * $data['jmlh_ppm']);
        $jumlah_xy += ($data['dosis'] * $data['jmlh_ppm']);
        ?>
        <tr>
        <td align="center"><?=$x+1;?></td>
        <td align="center"><?=$data['dosis'];?></td>
        <td align="center"><?=$data['jmlh_ppm'];?></td>
        </tr>
        <?php
        $x++;
    }
    ?>
   </center>
    <?php
    }
    ?>