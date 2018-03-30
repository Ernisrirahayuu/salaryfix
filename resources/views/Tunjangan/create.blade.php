`@extends('layouts.coba')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Tunjangan</font></div>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Tunjangan']) !!}
    <div class="form-group">
        {!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
        {!! Form::text('Kode_Tunjangan',null,['class'=>'form-control','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Nama Pegawai', 'Nama Pegawai') !!}
        
            <select class="form-control" name="Kode_Pegawai">   
             @foreach ($Pegawai as $data)
            <option value='{!! $data->id !!}'>{!! $data->User->name !!}</option>
            @endforeach
            </select>
    </div>
      <div class="form-group">
      {!! Form::label('Jabatan', 'Jabatan') !!}
            <select class="form-control" name="Kode_Jabatan">   
            
            @foreach ($Jabatan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Jabatan !!}</option>
            @endforeach
            </select>
    </div>

       <div class="form-group">
      {!! Form::label('Golongan', 'Golongan') !!}
      
            <select class="form-control" name="Kode_Golongan">   
          
            @foreach ($Golongan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Golongan !!}</option>
            @endforeach
            </select>
    </div>
    <div class="form-group">
    Status
        @php
            $status= App\status::all()
        @endphp
        <select class="form-control" name="Nama_Status">
        @foreach($status as $data)
            <option value="{{$data->id}}">{{$data->Nama_Status}}</option>
        @endforeach
        </select>
    </div>
    

    <div class="form-group">
    Jumlah Anak
        @php
            $jumlah= App\jumlah_anak::all()
        @endphp
        <select class="form-control" name="jumlah_anak">
        @foreach($jumlah as $data)
            <option value="{{$data->id}}">{{$data->Jumlah_Anak}}</option>
        @endforeach
        </select>
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

