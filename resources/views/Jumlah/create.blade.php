 @extends('layouts.coba')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Jumlah Anak</font></div>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Jumlah']) !!}
     <div class="form-group{{ $errors->has('Kode_Jumlah') ? ' has-error' : '' }}">
                            {!! Form::label('Kode Jumlah', 'Kode Jumlah:') !!}
                            <input type="text" name="Kode_Jumlah" class="form-control" required>

                            @if ($errors->has('Kode_Jumlah'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_Jumlah') }}</strong>
                                </span>
                            @endif 
                        </div>
    <div class="form-group">
        {!! Form::label('Jumlah Anak', 'Jumlah Anak') !!}
        {!! Form::text('Jumlah_Anak',null,['class'=>'form-control','required']) !!}
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