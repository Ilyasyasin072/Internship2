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
<div class="container-fluid bg-2 text-center">
<center>
<!-- First Container -->
<div class="container-fluid bg-2 text-center">
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
</div>
</body>
</html>
 <style lang="text/css">
            /*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#ffffff;
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
    color : #ffffff;    
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


                  