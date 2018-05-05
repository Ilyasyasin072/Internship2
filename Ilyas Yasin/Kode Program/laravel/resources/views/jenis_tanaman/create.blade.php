@extends('admin.index')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<section id="login">
     <div class="container">
        <div class="row">
                         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Forecasting Regresi Linier</h4>
                                <p class="category">Hydrponics Assistant</p>
                <h1>Tambah data jenis tanaman</h1>
                    <form method="POST" action="{{ url('/jenis_tanaman') }}" role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        	  {{ csrf_field() }}
                        <div class="form-group">
                            <label for="jenis_tanaman" class="sr-only">jenis_tanaman</label>
                            <input type="text" name="jenis_tanaman" id="jenis_tanaman" class="form-control" placeholder="Masukan jenis tanaman">
                        </div>
                        <div class="form-group">
                            <label for="jmlh_ppm" class="sr-only">jmlh_ppm</label>
                            <input type="text" name="jmlh_ppm" id="jmlh_ppm" class="form-control" placeholder="Masukan Jumlah PPM">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Simpan">
                    </form>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
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