@extends('admin.index')
@section('content')
</br>
</br>
    <section id="contact">
			<div class="section-content">
				<h1 class="section-header">HYDROPONICS ASSISTANT <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">IoT</span></h1>
				<h3>Peramalan Regresi Linier Sederahana</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form action="simpan.php" method="post">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Dosis Pupuk (Per ml Liter)</label>
					    	<input type="text" class="form-control" id="dosis" name="dosis" placeholder="Dosis Pupuk" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Jumlah Nutrisi (PPM)</label>
					    	<input type="number" class="form-control" id="jmlh_ppm" name="jmlh_ppm" placeholder="Jumlah Nutrisi" required>
					  	</div>	
                          <div>
			  				<button type="submit" class="btn btn-default" name="simpan" value="Simpan">Submit</button>
			  			</div>
			  		</div>
                      
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<center><h1>Masukan Dosis Pupuk</h1></center>
                              <center><h1> dan Jumlah PPM</h1></center>
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
@endsection
