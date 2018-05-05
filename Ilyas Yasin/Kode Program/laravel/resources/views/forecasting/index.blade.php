@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
                         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Forecasting Regresi Linier</h4>
                                <p class="category">Hydrponics Assistant</p>
                         <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Dosis(X)</th><th>Jumlah Nutrisi PPM(Y)</th>
                                        <th>X2</th>
                                        <th>Y2</th>
                                         <th>XY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($forecasting as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{  $item->dosis }}</td>
                                        <td>{{ $item->ppm }}</td>
                                        <td>{{ $item->dosis * $item->dosis }}</td>
                                        <td>{{ $item->ppm * $item->ppm }}</td>
                                        <td>{{ $item->dosis * $item->ppm }}</td>
                                           <td>
                                            <a href="{{ url('/forecasting/' . $item->id . '/edit') }}" title="Edit forecasting"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/forecasting', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete forecasing',
                                                        'onclick'=>'return confirm("delete delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>  
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                               <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                         <th>Jumlah X</th>
                                          <th>Jumlah Y</th>
                                           <th>Jumlah X2</th>
                                            <th>Jumlah Y2</th>
                                             <th>Jumlah XY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <td>{{ $jumlahx }}</td>
                                         <td>{{ $jumlahy }}</td>
                                         <td>{{ $jumlahx2}}</td>
                                         <td>{{ $jumlahy2 }}</td>
                                         <td>{{ $jumlahxy}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                              <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th>Menghitung Nilai Miring = b</th>
                                       <th>Nilai b</th>
                                        <th>Nilai b</th>
                                         <th>Menghitung Nilai Miring = a</th>
                                         <th>Menentukan Besar Kesalahan Standar Estimasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <td>{{ $b1 = $count * $jumlahxy - $jumlahx * $jumlahy  }}</td>
                                             <td>{{ $b2 = $count * $jumlahx2 - ($jumlahx * $jumlahx) }}</td> 
                                           <td> {{ $hasil = $b1/$b2 }} </td>
                                            <td>{{$total = $hasil * ($jumlahx) - ($jumlahy)}}</td>
                                            <td>{{ $se = $jumlahy2 - 0 * $jumlahy - 200 * $jumlahxy / $count - 2 }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                              <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th>Hasil R1</th>
                                        <th>Hasil R2</th>
                                        <th>Hasil R3</th>
                                        <th>Hasil Koefisien Determinasi R1 / R2 * R3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <td>{{ $r1 = $count * $jumlahxy -  $jumlahx * $jumlahy  }}</td>
                                         <td>{{ $r2 = ($count * $jumlahx2 - $jumlahx * $jumlahx)*0.5 }}</td>
                                         <td>{{ $r3 = ($count * $jumlahy2 - $jumlahy * $jumlahy)*0.5 }}</td>
                                         <td>{{ $r1 / $r2 * $r3 }} </td>
                                         
                                    </tr>
                                </tbody>
                            </table>
                            <center>
                            <div class="container">
        <div class="row">
                         <div class="col-md-11">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Hasil Peramalan Dengan Persamaan Regresi Linier</h4>
                                <p class="category">Faktor Akibat mencari X</p>

                                                    <form accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                           <div class="form-group {{ $errors->has('dosis') ? 'has-error' : ''}}">
    <label for="dosis" class="col-md-4 control-label">{{ 'dosis Per-ML Liter' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dosis" type="text" id="dosis" onkeyup="kali();">
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
     <div class="form-group {{ $errors->has('dosis') ? 'has-error' : ''}}">
    <label for="dosis" class="col-md-4 control-label">{{ 'Berapa Liter Air' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="liter" type="text" id="liter" onkeyup="kali();">
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    <label for="hasil" class="col-md-4 control-label">{{ 'hasil B' }}</label> 
     <div class="col-md-6">
        <input class="form-control" name="hasil" type="text" id="hasil" value={{$hasil}} disabled >
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    <label for="total" class="col-md-4 control-label">{{ 'hasil A' }}</label> 
     <div class="col-md-6">
        <input class="form-control" name="total" type="text" id="total" value={{$total}} disabled>
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    </td>
   
                                    <label for="dosis" class="col-md-4 control-label">{{ 'Jumlah Habis Nutrisi' }}</label> 
     <div class="col-md-6">
        <input class="form-control" name="result" type="text" id="result" disabled>
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    </br>
    <label> jadi Jika dosis pupuk nya mencapai 4 ml maka dipredisikan jumlah larutan yang dibutuhkan mencapai PPM</label>
                        </form>
                         <h4 class="title">Hasil Peramalan Dengan Persamaan Regresi Linier</h4>
                                <p class="category">Faktor Penyebab mencari Y</p>
                          <form accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
    <label for="ppm" class="col-md-4 control-label">{{ 'PPM Nutrisi' }}</label> 
     <div class="col-md-6">
        <input class="form-control" name="ppm" type="text" id="ppm"  onkeyup="kali1();" >
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('dosis') ? 'has-error' : ''}}">
    <label for="total1" class="col-md-4 control-label">{{ 'Hasil A' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="total1" type="text" id="total1" value="{{$total}}" disabled>
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    <label for="hasil1" class="col-md-4 control-label">{{ 'hasil B' }}</label> 
     <div class="col-md-6">
        <input class="form-control" name="hasil1" type="text" id="hasil1" value="{{$hasil}}" disabled >
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    </td>
    
                                    <label for="dosis" class="col-md-4 control-label">{{ 'Jumlah Dosis yang dibutuhkan' }}</label> 
     <div class="col-md-6">
        <input class="form-control" name="resul1t1" type="text" id="result1" disabled>
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
    <label>Jika Jumlah larutan nya PPM 800 (Variabel Y), Berapa Dosis yang dibutuhkan apabila target yang dibutuhkan dalam jumlah ditentukan 						
jadi prediksi larutan yang sesuai mencapai adalah ml					
</label>
   </center>
</script>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <script>
function kali() {
      var txtFirstNumberValue = document.getElementById('dosis').value;
      var txtSecondNumberValue = document.getElementById('hasil').value;
      var txtThreeNumberValue = document.getElementById('total').value;
       var txtFourNumberValue = document.getElementById('liter').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtFourNumberValue) * parseInt(txtSecondNumberValue) + parseInt(txtThreeNumberValue);
      if (!isNaN(result)) {
         document.getElementById('result').value = result;
      }
}

function kali1() {
      var txtFirstNumberValue = document.getElementById('total1').value;
      var txtSecondNumberValue = document.getElementById('ppm').value;
      var txtThreeNumberValue = document.getElementById('hasil1').value;
      var result = (parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue)) / parseInt(txtThreeNumberValue);
      if (!isNaN(result)) {
         document.getElementById('result1').value = result;
      }
}

function kali2() {
      var txtFirstNumberValue = document.getElementById('dosis').value;
      var txtSecondNumberValue = document.getElementById('liter').value;
      var result = (parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue));
      if (!isNaN(result)) {
         document.getElementById('totalliter').value = result;
      }
}
</script>
@endsection
