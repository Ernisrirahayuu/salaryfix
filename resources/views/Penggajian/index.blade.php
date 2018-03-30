 @extends('layouts.coba')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="widget-title">
            <center><h4>Data Penggajian</h4></center>
            </div>

             <a href="{{url('/Penggajian/create')}}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Create Data</a>
             <a href="pdf" id="export-to-pdf" class="btn btn-primary">Export to PDF</a>


                <div class="panel panel-success">
                <div class="panel-heading">     
                <div class="panel-primary">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Pegawai</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Total Gaji</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Action</center></p></th>
                        </tr>
                      </thead>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($Penggajian as $data)
                            <tbody>
                                <tr>
                                
                                    <td><center>{{$no++}}</center></td>
                                    <td><center>{{$data->Tunjangan->Pegawai->User->name}} </center></td>
                                    <td><center>{{$data->Jumlah_jam_lembur}} </center></td>
                                    
                                    <td><center><?php echo 'Rp.'. number_format($data->Jumlah_uang_lembur, 0,",","."); ?>
                                        </center></td>
                                    <td><center><?php echo 'Rp.'. number_format($data->Gaji_pokok, 0,",","."); ?>
                                        </center></td>
                                    <td><center><?php echo 'Rp.'. number_format($data->Total_gaji, 0,",","."); ?>
                                        </center></td>
                                    <td>{{$data->updated_at}} </td>
                              
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]) !!}
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