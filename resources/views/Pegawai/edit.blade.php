@extends('layouts.coba')

@section('content')
<div class="container">
	<div class="row">
        <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Edit Data Pegawai</font></div>
</center>
				<hr>
				{!! Form::model($Pegawai, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['Pegawai.update', $Pegawai->id], 'files' => true]) !!}

					<div class="form-group{{ $errors->has('Nip') ? ' has-error' : '' }}">
	                    <label for="Nip" class="col-md-4 control-label">NIP</label>
						<div class="col-md-6">
	                        <input type="text" name="Nip" class="form-control" value="{{ $Pegawai->Nip }}" readonly>
	                    </div>
	                </div>
	                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	                    <label for="name" class="col-md-4 control-label">Nama Pegawai</label>
						<div class="col-md-6">
	                        <input type="text" name="name" class="form-control" value="{{ $Pegawai->User->name }}" readonly>
	                    </div>
	                </div>
	                <div class="form-group{{ $errors->has('Kode_Jabatan') ? ' has-error' : '' }}">
	                    <label for="Kode_Jabatan" class="col-md-4 control-label">Nama Jabatan</label>
						<div class="col-md-6">
	                        <select name="Kode_Jabatan" class="form-control">
                                @foreach($Jabatan as $data)
                                    <option value="{{ $data->id }}">{{ $data->Nama_Jabatan }}</option>
                                @endforeach
                            </select>
	                    </div>
	                </div>
	                <div class="form-group{{ $errors->has('Kode_Golongan') ? ' has-error' : '' }}">
	                    <label for="Kode_Golongan" class="col-md-4 control-label">Nama Golongan</label>
						<div class="col-md-6">
	                        <select name="Kode_Golongan" class="form-control">
                                @foreach($Golongan as $data)
                                    <option value="{{ $data->id }}">{{ $data->Nama_Golongan }}</option>
                                @endforeach
                            </select>
	                    </div>
	                </div>
	                
					<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}
	           </div>
	       </div>
	   </div>
    </div>
</div> 	
@endsection