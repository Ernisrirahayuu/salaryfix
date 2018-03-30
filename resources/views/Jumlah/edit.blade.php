@extends('layouts.coba')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Edit Jumlah Anak</font></div>
</center>
                <div class="panel-body">  
                {!! Form::model($jumlah,['method' => 'PATCH','route'=>['Jumlah.update',$jumlah->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Jumlah', 'Kode Jumlah') !!}
        {!! Form::text('Kode_Jumlah',null,['class'=>'form-control','required','readonly']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Jumlah Anak', 'Jumlah Anak') !!}
        {!! Form::text('Jumlah_Anak',null,['class'=>'form-control','required','readonly']) !!}
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