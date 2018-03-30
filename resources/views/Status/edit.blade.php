@extends('layouts.coba')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Edit Status</font></div>
</center>
                <div class="panel-body">  
                {!! Form::model($status,['method' => 'PATCH','route'=>['Status.update',$status->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Status', 'Kode Status') !!}
        {!! Form::text('Kode_Status',null,['class'=>'form-control','required','readonly']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama Status', 'Nama Status') !!}
        {!! Form::text('Nama_Status',null,['class'=>'form-control','required','readonly']) !!}
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