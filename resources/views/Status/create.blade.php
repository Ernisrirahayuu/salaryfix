 @extends('layouts.coba')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Status</font></div>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Status']) !!}
     <div class="form-group{{ $errors->has('Kode_Status') ? ' has-error' : '' }}">
                            {!! Form::label('Kode', 'Kode Status:') !!}
                            <input type="text" name="Kode_Status" class="form-control" required>

                            @if ($errors->has('Kode_Status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_Status') }}</strong>
                                </span>
                            @endif 
                        </div>
    <div class="form-group">
        {!! Form::label('Nama Status', 'Nama Status') !!}
        {!! Form::text('Nama_Status',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
        {!! Form::text('Besaran_Uang',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

    
@stop