@extends('admin.index')

@section('content')
</br>
</br>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Create New forecasting</div>
                    <div class="card-body">
                        <a href="{{ url('/forecasting') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/forecasting') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                           <div class="form-group {{ $errors->has('dosis') ? 'has-error' : ''}}">
    <label for="dosis" class="col-md-4 control-label">{{ 'Dosis' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dosis" type="text" id="dosis" onkeyup="kali22();" >
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ppm') ? 'has-error' : ''}}">
    <label for="ppm" class="col-md-4 control-label">{{ 'Ppm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ppm" type="text" id="ppm" onkeyup="kali22();" >
        {!! $errors->first('ppm', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jumlahx2') ? 'has-error' : ''}}">
    <label for="jumlahx2" class="col-md-4 control-label">{{ 'X2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="x2" type="text" id="x2">
        {!! $errors->first('x2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jumlahy2') ? 'has-error' : ''}}">
    <label for="jumlahy2" class="col-md-4 control-label">{{ 'Y2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="y2" type="text" id="y2">
        {!! $errors->first('y2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jumlahxy') ? 'has-error' : ''}}">
    <label for="jumlahx2" class="col-md-4 control-label">{{ 'XY' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="xy" type="text" id="xy">
        {!! $errors->first('xy', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
</script>

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
