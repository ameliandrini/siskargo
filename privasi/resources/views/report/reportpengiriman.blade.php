<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pengiriman</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            /* margin:0 auto; */
            /* margin-top:35px; */
            padding:40px;
            width:950px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            /* margin:0 auto; */
            width:740px;
        }
        td, tr, th{
            padding:1px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
    <table style="border-style:none">
        <tr style="width:100%;">
            <td style="width:5%;border-style:none">
            <img src="{{ asset('/assets/images/logoawr.png')}}" style="height:100px;width:100px;">
            </td>
            <td style="width:95%;border-style:none">
                <h2>LAPORAN TONASE BULANAN AWR CARGO</h2>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="border-style:none">
            <table id="mydata" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
						  <th rowspan="2">No</th>
						  <th rowspan="2">Tanggal</th>
						  <th rowspan="2">Trip</th>
						  <th>Tonase</th>
						  <!-- <th>Nama Penerima</th>
						  <th>Kota Tujuan</th> -->
						 <th rowspan="2">Wisma</th>
						  
                        </tr>
                        <tr>
                          <th>Darat</th>
                          
						  
                        </tr>
                      </thead>
                      <tbody id="show_data">
                    
                      {{$i = 0}}
                      @foreach($data_reportpengiriman as $pengiriman)
                      <tr style="background-color:#F7F7F7;color:#000000;text-align:center">
                          <td>{{$i+1}}</td>							
						  <td>{{$pengiriman->pengirimanh_tgljln}}</td>
						  <td>{{$pengiriman->pengirimanh_trip}}</td>							
						  <td>{{$pengiriman->jumlahton}}</td>
						  
						 <td></td>
                          
                        </tr>
                        {{$i++}}
                      @endforeach
                      </tbody>
                    </table>
            </td>
        </tr>
    </table>
    
    </div>
</body>
</html>