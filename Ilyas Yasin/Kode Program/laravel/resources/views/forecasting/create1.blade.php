@extends('admin.index')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<section id="login">
     <div class="container">
        <div class="row">
                         <div class="col-md-11">
                        <div class="card">
                            <center>
                                </br>
                            <h4 class="title">Forecasting Regresi Linier</h4>
                                <p class="category">Hydrponics Assistant</p>
                                <h1>Mencari Nilai PPM Berdasarkan EC</h1>
                                 </center>
                            <div class="form-group">
                            <label for="dosis" class="sr-only"></label>
                            <input type="text" name="ml" id="ml" class="form-control" placeholder="Masukan Dosis mlr" onkeyup="kali23();">
                        </div>
                        <div class="form-group">
                            <label for="ppm" class="sr-only"></label>
                            <input type="text" name="ec" id="ec" class="form-control" placeholder="Masukan Nilai Ec" onkeyup="kali23();">
                        </div>
                        <div class="form-group">
                            <label for="dosis" class="sr-only"></label>
                            <input type="text" name="lt" id="lt" class="form-control" placeholder="Masukan Liter Air" onkeyup="kali23();">
                        </div>
                        <div class="form-group">
                            <label for="ppm" class="sr-only">i</label>
                            <input type="text" name="d" id="d" class="form-control" placeholder="Masukan Jumlah Masing-Masing Nutris" onkeyup="kali23();">
                        </div>
                        <div class="form-group">
                            <label for="ppm" class="sr-only">i</label>
                            <input type="text" name="hasil" id="hasil" class="form-control" placeholder="Nilai PPM" disabled>
                        </div>
                 </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<section id="login">
     <div class="container">
        <div class="row">
                         <div class="col-md-11">
                        <div class="card">
                            <div class="header">
                                <center>
                                <h4 class="title">Forecasting Regresi Linier</h4>
                                <p class="category">Hydrponics Assistant</p>
                <h1>Masukan Jumlah Dosis nutrisi/pupuk ml dan Jumlah PPM tanaman Hidroponik</h1>
                 </center>
                        <form method="POST" action="{{ url('/forecasting') }}" role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                                {{ csrf_field() }}
                        <div class="form-group">
                            <label for="dosis" class="sr-only">Dosis Pupuk Mililiter</label>
                            <input type="text" name="dosis" id="dosis" class="form-control" placeholder="Dosis Pupuk Mililiter" onkeyup="kali22();">
                        </div>
                        <div class="form-group">
                            <label for="ppm" class="sr-only">PPM Nutrisi Tanaman</label>
                            <input type="text" name="ppm" id="ppm" class="form-control" placeholder="PPM Nutrisi Tanaman" onkeyup="kali22();">
                        </div>
                         <div class="form-group">
                            <label for="x2" class="sr-only">x2</label>
                            <input type="text" name="x2" id="x2" class="form-control" placeholder="x2" >
                        </div>
                         <div class="form-group">
                            <label for="y2" class="sr-only">y2</label>
                            <input type="text" name="y2" id="y2" class="form-control" placeholder="y2">
                        </div>
                         <div class="form-group">
                            <label for="xy" class="sr-only">xy</label>
                            <input type="text" name="xy" id="xy" class="form-control" placeholder="xy">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Simpan">
                    </form>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
  <script>
function kali22() {
      var txtFirstNumberValue = document.getElementById('dosis').value;
      var txtSecondNumberValue = document.getElementById('ppm').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtFirstNumberValue);
       var result1 = parseInt(txtSecondNumberValue) * parseInt(txtSecondNumberValue);
        var result2 = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('x2').value = result;
      }

      if (!isNaN(result1)) {
         document.getElementById('y2').value = result1;
      }

      if (!isNaN(result2)) {
         document.getElementById('xy').value = result2;
      }

}
function kali23() {
      var txtml = document.getElementById('ml').value;
      var txtec = document.getElementById('ec').value;
      var txtlt = document.getElementById('lt').value;
      var txtxd = document.getElementById('d').value; 
      var resulthasil = parseInt(txtml) * parseInt(txtec) / parseInt(txtlt) * parseInt(txtxd);
      if (!isNaN(resulthasil)) {
         document.getElementById('hasil').value = resulthasil;
      }
}
</script>
<style lang="text/css">
/*    --------------------------------------------------
	:: Login Section
	-------------------------------------------------- */
#login {
    padding-top: 100px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #8A2BE2;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #8A2BE2;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #8A2BE2;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
	margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
	text-align: center;
	display: block;
}

/*    --------------------------------------------------
	:: Inputs & Buttons
	-------------------------------------------------- */
.form-control {
    color: #8A2BE2;
}
.btn-custom {
    color: #fff;
	background-color: #8A2BE2;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #8A2BE2;
}

/*    --------------------------------------------------
    :: Footer
	-------------------------------------------------- */
#footer {
    color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
#footer p {
    margin-bottom: 0;
}
#footer a {
    color: inherit;
}
</style>
@endsection