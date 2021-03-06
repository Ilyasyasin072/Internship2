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
<form method="POST" action="{{ url('/jenis_ph') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                           <div class="col-md-5 form-line">
			  			<div class="form-group">
                           {{ csrf_field() }}

                            @include ('jenis_ph.form')
                        </div>
			  		</div>
                        </form>
	<div class="col-md-6">
			  			<div class="form-group">
			  				<center><h2>Masukan Jenis Tanaman</h2></center>
                              <center><h2> dan pH pada Jenis Tanaman</h2></center>
			  			</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
  padding-top: 40px;
  width: 90%;
  width: 90vw;
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
