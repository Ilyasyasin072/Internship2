<div class="form-group {{ $errors->has('jenis_tanaman') ? 'has-error' : ''}}">
    <label for="jenis_tanaman" class="col-md-4 control-label">{{ 'Jenis Tanaman' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="jenis_tanaman" type="text" id="jenis_tanaman" value="{{ $jenis_tanaman->jenis_tanaman or ''}}" >
        {!! $errors->first('jenis_tanaman', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jmlh_ppm') ? 'has-error' : ''}}">
    <label for="jmlh_ppm" class="col-md-4 control-label">{{ 'Jmlh Ppm' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="jmlh_ppm" type="text" id="jmlh_ppm" value="{{ $jenis_tanaman->jmlh_ppm or ''}}" >
        {!! $errors->first('jmlh_ppm', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
