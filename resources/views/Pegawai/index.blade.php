@extends('layouts.coba')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="widget-title">
            <center><h4>Data Pegawai</h4></center>
            </div>

            <a href="{{url('/Pegawai/create')}}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Create Data</a>

            <div class="panel panel-success">
                <div class="panel-heading">
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>NIP</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th colspan="3"><center>Action</center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Pegawai as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<td><center>{{ $data->Nip }}</center></td>
						<td><center>{{ $data->User->name }}</center></td>
						<td><center>{{ $data->Jabatan->Nama_Jabatan }}</center></td>
						<td><center>{{ $data->Golongan->Nama_Golongan }}</center></td>
						<td>
						
                                <td><center><a href="{{route('Pegawai.edit',$data->id)}}" class="btn btn-warning">Update</a></center></td>
             <td><center>
               {!! Form::open(['method' => 'DELETE', 'route'=>['Pegawai.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}</center>
     </td>
                                
					</tr>
				@endforeach

            </tbody>
        </table>
      
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection