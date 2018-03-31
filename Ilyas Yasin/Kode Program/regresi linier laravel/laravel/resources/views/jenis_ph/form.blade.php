<div class="form-group {{ $errors->has('tanggal') ? 'has-error' : ''}}">
    <label for="tanggal" class="col-md-4 control-label">{{ 'Tanggal' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tanggal" type="date" id="tanggal" value="{{ $jenis_ph->tanggal or ''}}" >
        {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jenis_tanaman') ? 'has-error' : ''}}">
    <label for="jenis_tanaman" class="col-md-4 control-label">{{ 'Jenis Tanaman' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="jenis_tanaman" type="text" id="jenis_tanaman" value="{{ $jenis_ph->jenis_tanaman or ''}}" >
        {!! $errors->first('jenis_tanaman', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
