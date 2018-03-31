<div class="form-group {{ $errors->has('dosis') ? 'has-error' : ''}}">
    <label for="dosis" class="col-md-4 control-label">{{ 'Dosis' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dosis" type="text" id="dosis" value="{{ $forecasting->dosis or ''}}" >
        {!! $errors->first('dosis', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ppm') ? 'has-error' : ''}}">
    <label for="ppm" class="col-md-4 control-label">{{ 'Ppm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ppm" type="text" id="ppm" value="{{ $forecasting->ppm or ''}}" >
        {!! $errors->first('ppm', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
