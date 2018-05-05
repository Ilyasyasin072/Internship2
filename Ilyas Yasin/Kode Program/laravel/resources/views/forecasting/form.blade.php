<div class="form-group {{ $errors->has('dosis') ? 'has-error' : ''}}">
    <label for="dosis" class="col-md-4 control-label">{{ 'Dosis' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dosis" type="text" id="dosis" value="{{ $forecasting->dosis or ''}}" onkeyup="kali();">
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ppm') ? 'has-error' : ''}}">
    <label for="ppm" class="col-md-4 control-label">{{ 'Ppm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ppm" type="text" id="ppm" value="{{ $forecasting->ppm or ''}}"  onkeyup="kali();" >
        {!! $errors->first('ppm', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('x2') ? 'has-error' : ''}}">
    <label for="x2" class="col-md-4 control-label">{{ 'x2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="x2" type="text" id="x2" value="{{ $forecasting->x2 or ''}}">
        {!! $errors->first('x2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('y2') ? 'has-error' : ''}}">
    <label for="y2" class="col-md-4 control-label">{{ 'y2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="y2" type="text" id="y2" value="{{ $forecasting->y2 or ''}}" >
        {!! $errors->first('y2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('xy') ? 'has-error' : ''}}">
    <label for="xy" class="col-md-4 control-label">{{ 'Ppm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="xy" type="text" id="xy" value="{{ $forecasting->xy or ''}}">
        {!! $errors->first('xy', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

 <script>
function kali() {
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
