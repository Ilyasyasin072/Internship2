<?php include "header.php";?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Regresi linier sederana</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
           <li><a href="inputnutrisi.php">Tambah Data Jenis Tanaman</a></li>
        <li><a href="input.php">Tambah Data Prediksi</a></li>
        <li><a href="tampilData.php">Tampil Data Prediksi</a></li>
        <li><a href="tampildetail.php">Tampil Data Jenis Tanaman</a></li>
       <li>  <a href="prediksi.php">Forecasting</a></li>
        <li> <a href="logout.php">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>
<section id="contact">
<center>
<!-- <h1>Pengumpulan Data</h1> -->
<table class="data" border="2" style="border-collapse; collapse; margin-bottom: 2px;">
<tr>
<!-- <th colspan="3">No</th>
<th colspan="3">Dosis Pupuk</th>
<th colspan="3">Jumlah Nutrisi PPM</th>
<th colspan="3">x</th>
<th colspan="3">y</th>
<th colspan="3">x^2</th>
<th colspan="3">y^2</th>
<th colspan="3">xy</th> -->
<!-- </tr>
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
        <td align="center" colspan="3"><?=$x+1;?></td>
        <td align="center" colspan="3"><?=$data['dosis'];?></td>
        <td align="center" colspan="3"><?=$data['jmlh_ppm'];?></td>
        <td align="center" colspan="3"><?=$data['dosis'];?></td>
        <td align="center" colspan="3"><?=$data['jmlh_ppm'];?></td>
        <td align="center" colspan="3"><?=$data['dosis']^2;?></td>
        <td align="center" colspan="3"><?=$data['jmlh_ppm']^2;?></td>
        <td align="center" colspan="3"><?=$data['dosis'] * $data['jmlh_ppm'] ;?></td>
        </tr>
        <?php
        $x++;
    }
    ?>
    
    <td colspan="5">Rata</td>
       <td>
       <?php 
       $rata_x = $jumlah_x^2;
       echo $rata_x;
       ?>
       </td>
       <td>
       <?php 
       $rata_x = $jumlah_y^2;
       echo $rata_x;
       ?>
       </td> -->
       <!-- <tr>
    <td>jumlah</td>
    <td colspan="3"></td>
    <td colspan="3"></td>
    <td colspan="3"></td>
    <td colspan="3"><?=$jumlah_x;?></td>
      <td colspan="3"><?=$jumlah_y;?></td>
        <td colspan="3"><?=$jumlah_x2;?></td>
          <td colspan="3"><?=$jumlah_y2;?></td>
            <td colspan="3"><?=$jumlah_xy;?></td>
    </tr> -->
    </br>
    <table class="data" border="2" style="border-collapse;">
    <h1> Prediksi Faktor Penyebab dan Prediksi Faktor Akibat</h1>
    <tr>
    </tr>
     <h1>Mengitung Konstanta dan Nilai Miring</h1>
    <tr>
   <td colspan="5">Menghitung Konstanta</td>
   <td>
   <?php 
  // $a1 = (($jumlah_y) * ($jumlah_x2) - ($jumlah_x) * ($jumlah_xy));
  // $a2 = ($x * ($jumlah_x2) - ($jumlah_x * $jumlah_x));
       $a1 = (6630) * (191.9425) - (33.15) * (38388.5);
       $a2 = (7) * (191.9425) - (33.15) * (33.15);
   $a = $a1/$a2;
   echo $a
   ?>
   </td>
   </tr>
   <td colspan="5">Menghitung b</td>
   <td>
     <?php 
    //  $b = ($x * ($jumlah_xy) - ($jumlah_x) * ($jumlah_y) / $x * ($jumlah_x2) - ($jumlah_x)^2);
   $b1 = (7*(38388.5)-(33.15)*(6630));
     $b2  = (7 * (191.9425)-(33.15*33.15));
     $b = $b1/$b2;
     echo $b;
   ?>
   </td>
   <tr>
<td colspan="5">Rumus Linier</td>
   <td>
     <?php 
   $y = '$a + $b + x';
   echo $y;
   ?>
   </td>
   </tr>
   </center>
    <?php
    }
    ?>
    </div>
    <form>
    <tr>
    <td> Prediksikan jumlah dosis pupuk jika jumlah nutrisi (ppm) <?=$x = 4?> ?</td>
    </tr>
    <tr>
    <td>Prediksi Variabel Faktor Penyebab Hasil yang diapat adalah</td>
    </tr>
    <tr>
      <td> Y = <?=$a;?> + <?=$b;?> * <?=$x = 4?> </td>
    </tr>
    <tr>
    <td>Hasil Prediksi Variabel X</td>
    <td>Variabel Y = <?php $hasilX = $a + $b * 4; echo $hasilX?></td>
     </tr>
     <tr>
    </tr>
    <tr>
    <td>Prediksikan jumlah nutrisi (ppm) hydroponics jika jumlah dosis nya <?=$y = 800?> </td>
    </tr>
     <!-- <tr>
     <td>
     <?php 
     $x1 = $y+$a;
     $hasil = $x1/$b;
     echo $hasil;
     ?>
     </tr> -->
     <tr>
     </tr>
      <tr>
     <td>Hasil Prediksi Variabel Y</td>
      <td> Variabel X = <?php echo $hasil; ?></td>
     </tr>
     	<div class="col-md-6">
			  			<div class="form-group">
			  				<label>Prediksikan Dosis Pupuk  (Variabel X) berapa Jumlah habisnya Nutrisi (ppm) yang dibutuhkan ?</label>
					    	<input type="number" class="form-control" id="dosis" name="dosis" placeholder="Variabel X" value="<?=$x?>" required>
				  		</div>
              <div>
			  				<button type="submit" class="btn btn-default" name="simpan" value="Simpan">Submit</button>
			  			</div>
              	<div class="form-group">
			  				<label>Prediksikan Jika Jumlah pupuk nya (Variabel Y), maka dosis pupuk yang diperlukan berapa ?</label>
					    	<input type="number" class="form-control" placeholder="Variabel Y" value="<?=$y?>" required>
				  		</div>
              <div>
			  				<button type="submit" class="btn btn-default" name="simpan" value="Simpan">Submit</button>
			  			</div>
              </br>
              <label>Jadi Jika Jumlah Dosis Pupuk nilai <?=$x?>, maka diprediksikan Jumlah Habis Nutrisi (ppm) Mencapai <?=$hasilX;?> </label>
              </br>
              <label>Jika Jumlah Laturan Nutrisi PPm <?=$y?>, Maka dosis yang dibutuhkan untuk Setiap Tanaman mencapai <?=$hasil;?> </label>
			  		</div>
    </form>
    </body>
</html>
 <style lang="text/css">
            /*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}

        </style>
