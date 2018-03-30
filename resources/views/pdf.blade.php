<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Cetak Laporan </title>
    <style>
      table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
  }

    </style>
</head>
<body>
<div class="container">
<div class="row">
    
    <img src="img/gr.png" style="float:right" height="70px"><br><br>
    <h3><div style="text-align: left;">LAPORAN GAJI PEGAWAI </div></h3>
        <div style="text-align: left;">No: 17/PTP/2018</div>
        <div style="text-align: right;">Company   : GRAMEDIA BAGS</div>
        <div style="text-align: right;">Address   : Jl. Permata Kopo Bandung</div>
    <table>
        <tr>
            <th><center> No </center></th>
            <th><center> Pegawai </center></th>
            <th><center> Jumlah Jam Lembur  </center></th>
            <th><center> Jumlah Uang Lembur </center></th>
            <th><center> Gaji Pokok</center></th>
            <th><center> Total Gaji </center></th>
            <th><center> Tanggal Pengambilan </center></th>
        </tr> 
                @php $no=1; @endphp
                @foreach($gajih as $data) 
                <tr>
                                
                                    <td>{{$no++}}</td>
                                    <td>{{$data->Tunjangan->Pegawai->User->name}}</td>
                                    <td>{{$data->Jumlah_jam_lembur}} </td>
                                    <td>{{$data->Jumlah_uang_lembur}} </td>
                                    <td>{{$data->Gaji_pokok}} </td>
                                    <td>{{$data->Total_gaji}} </td>
                                    <td>{{$data->updated_at}} </td>
                </tr>
                @endforeach
    </table>
</body>
</html>