 @extends('layouts.coba')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
               <div class="widget-title">
            <center><h4>Data Kategori Lembur</h4></center>
            </div>
            </div>

           <a href="{{url('/Kategori_Lembur/create')}}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Create Data</a>

           <div class="panel panel-success">
                <div class="panel-heading">     
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Lembur</th>
                    <th>Jabatan</th>
                    <th>Golongan</th>
                    <th>Besaran Uang</th>
                    <th colspan="2"><center>Action</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Kategori_Lembur as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td>{{ $data->Kode_Lembur}}</td>
                    <td>{{ $data->Jabatan->Nama_Jabatan }}</td>
                    <td>{{ $data->Golongan->Nama_Golongan }}</td>
                     <td><?php echo 'Rp.'. number_format($data->Besaran_Uang, 0,",","."); ?>
             </td>
                    
             
                    <td><a href="{{route('Kategori_Lembur.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
               {!! Form::open(['method' => 'DELETE', 'route'=>['Kategori_Lembur.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
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