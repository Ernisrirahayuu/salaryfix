 @extends('layouts.coba')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="widget-title">
            <center><h4>Data Status</h4></center>
            </div>


            <div class="panel panel-success">
                <div class="panel-heading">     
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Status</th>
                    <th>Nama Status</th>
                    <th>Besaran Uang</th>
                    <th colspan="2"><center>Action</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($status as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td>{{ $data->Kode_Status }}</td>
                    <td>{{ $data->Nama_Status }}</td>
                     <td><?php echo 'Rp.'. number_format($data->Besaran_Uang, 0,",","."); ?>
             </td>
                    
             
                    <td><a href="{{route('Status.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Status.destroy', $data->id]]) !!}
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