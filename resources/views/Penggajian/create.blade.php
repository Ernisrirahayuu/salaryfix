@extends('layouts.coba')

@section('content')

<br><br><br><br><br><br><br>
  <div class="container">
            <div class="row">
                    <center><h2>Input Data Penggajian</h2></center>
                    <br />
              {!! Form::open(['url' => 'Penggajian', 'class' => 'form-horizontal form-label-left']) !!}
    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            {!! Form::label('Pegawai', 'Pegawai ') !!}
             <span class="required">*</span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Kode_Tunjangan">
            
            @foreach($Gaji as $data)
                <option value="{{$data->id}}">{{$data->Pegawai->Nip}}&nbsp;|&nbsp;{{$data->Pegawai->User->name}}</option>
            @endforeach
            </select>
            @if ($errors->has('Kode_Tunjangan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_Tunjangan') }}</strong>
                                </span>
                            @endif 
        </div>
    </div>
     <div class="col-md-6 col-sm-6 col-xs-12">
                        </div>
       <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
          </div>
      </div>
    </div>
    {!! Form::close() !!}
          </div>
          </div>     
    </div>
@endsection
