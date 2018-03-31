<?php include "header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="input.php">Tambah Data Prediksi</a></li>
        <li><a href="tampilData.php">Tampil Data Prediksi</a></li>
        <li><a href="prediksi.php">Prediksi (Forecasting)</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
<div class="container">
  <body>
 <form action="simpan.php" method="post">
  <div class="form-group">
    <label for="dosis">Masukan Dosis Pupuk</label>
    <input type="text" class="form-control" id="dosis" name="dosis" placeholder="dosis">
  </div>
  <div class="form-group">
    <label for="jmlh_ppm">Masukan Jumlah PPM Nutrisi:</label>
    <input type="text" class="form-control" id="jmlh_ppm" name="jmlh_ppm" placeholder="Jumlah Nutrisi PPM">
  </div>
  <button type="submit" class="btn btn-default" name="simpan" value="Simpan">Submit</button>
</form> 
</body>
</div>
</div>
</body>
</html>
<html>

</html>
