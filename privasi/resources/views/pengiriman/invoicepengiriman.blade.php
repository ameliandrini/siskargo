<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
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
            margin:0 auto;
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
            margin:0 auto;
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
        <table>
            <caption>
			
				<tr>
					<td style="border:0px solid black">
						<img src="{{ asset('/assets/images/logoawr.png')}}" style="height:100%;width:100%;">
					</td>
					<td colspan="3">
						<center><h3>AWR.CARGO </h3>
                        <table style="width:100%;border-style:none">
							<tr>
							<td style="width:10px;padding:1px;border-style:none">
								Jakarta
								</td>
								<td style="width:1px;border-style:none">
								:
								</td>
								<td style="border-style:none">
								Jl. Kebon Kacang Tanah Abang
								</td>
							</tr>
							<tr>
							<td style="width:10px;padding:1px;border-style:none">
								Mangga Dua 
								</td>
								<td style="width:1px;border-style:none">
								:
								</td>
								<td style="border-style:none">
								Ruko Textile Mangga Dua
								</td>
							</tr>
							<tr>
							<td style="width:10px;padding:1px;border-style:none">
								Bukit Tinggi 
								</td>
								<td style="width:1px;border-style:none">
								:
								</td>
								<td style="border-style:none">
								Jl. Parak Kubang 
								</td>
							</tr>
						</table>
					</td>
                </tr>
            </caption>
            <!-- <thead> -->
                <tr>
                    <th colspan="3">Invoice <strong>#{{ $invoice->pengiriman_id }}</strong></th>
                    <th>{{ $invoice->created_at->format('D, d M Y') }}</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Pengirim: </h4>
                        <p>{{ $invoice->pengiriman_namapengirim }}<br>
                        {{ $invoice->pengiriman_alamatpengirim }}<br>
                        {{ $invoice->pengiriman_nohppengirim }} 
						</p>
                    </td>
                    <td colspan="2">
                        <h4>Penerima: </h4>
                        <p>{{ $invoice->pengiriman_namapenerima }}<br>
                        {{ $invoice->pengiriman_alamatpenerima }}<br>
                        {{ $invoice->pengiriman_nohppenerima }} 
						</p>
                    </td>
                </tr>
            <!-- </thead>
            <tbody> -->
                <tr>
                    <th>Kota Asal</th>
                    <th>Kota Tujuan</th>
                    <th>Jumlah</th>
                    <th>Total Berat</th>
                </tr>
               <tr>
                    <td><center>{{ $invoice->pengiriman_kotapengirim }}</td>
                    <td><center>{{ $invoice->pengiriman_kotapenerima }}</td>
                    <td><center>{{ $invoice->pengiriman_jumlah }}</td>
                    <td><center>{{ $invoice->pengiriman_totalberat }}</td>
                </tr>
               
                <tr>
                    <th>Ongkos Kirim</th>
                    <td>{{ $invoice->pengiriman_ongkir }}</td>
                    <td colspan="2">Barang harus dikirim kayu</td>
				</tr>
				<tr>
                    <th style="height:100px;text-align:left;vertical-align: bottom;" colspan="2" >Tanda Tangan Pengirim</th>
                    <th style="height:100px;text-align:left;vertical-align: bottom;" colspan="2">Tanda Tangan Penerima</th>
                </tr>
            <!-- </tbody> -->
            <!-- <tfoot style="height:300px">
                <tr>
                    <th colspan="2" >Tanda Tangan Pengirim</th>
                    <th colspan="2">Tanda Tangan Penerima</th>
                </tr>
            </tfoot> -->
        </table>
    </div>
</body>
</html>