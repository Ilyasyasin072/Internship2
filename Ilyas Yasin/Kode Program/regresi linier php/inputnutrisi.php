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
			<div class="section-content">
				<h1 class="section-header">HYDROPONICS ASSISTANT <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">IoT</span></h1>
				<h3>Peramalan Regresi Linier Sederahana</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form action="simpandetail.php" method="post">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Jenis Tanaman</label>
					    	<input type="text" class="form-control" id="jenis_tanaman" name="jenis_tanaman" placeholder="jenis_tanaman Pupuk" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Dosis Pupuk Per ML Liter</label>
					    	<input type="text" class="form-control" id="ph" name="ph" placeholder="Jumlah ph" required>
					  	</div>	
                          <div class="form-group">
					    	<label for="exampleInputEmail">Jumlah Nutrisi (PPM)</label>
					    	<input type="text" class="form-control" id="ppm" name="ppm" placeholder="ppm" required>
					  	</div>	
                          <div>
			  				<button type="submit" class="btn btn-default" name="simpan" value="Simpan">Submit</button>
			  			</div>
			  		</div>
                      
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<center><h1>Masukan Jenis Tanaman Hydroponics</h1></center>
                              <center><h1>Masukan Nilai pH dari Masing-Masing Tanaman</h1></center>
                              <center><h1>Masukan Nilai PPM dari Masing-Masing Tanaman</h1></center>
                            <center><h1>Hydroponics Assistant</h1></center>
			  			</div>
			  			
			  			
					</div>
				</form>
			</div>
		</section>

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