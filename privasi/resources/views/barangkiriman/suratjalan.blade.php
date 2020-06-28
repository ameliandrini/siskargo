<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Jalan</title>
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
            width:150px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:0px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:40px;
        }
        td, tr, th{
            padding:1px;
            border:0px solid #333;
            width:160px;
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
						<center><h3><font style="font-size: 33pt;color:red">AWR. CARGO</font> <br>(AWR. CARGO)<br>CARGO DARAT EXPRESS
                        <table style="width:100%;border-style:none">
							<tr>
							<td style="width:10px;padding:1px;border-style:none;font-size:9pt;">
								Jakarta
								</td>
								<td style="width:1px;border-style:none;font-size:9pt;">
								:
								</td>
								<td style="border-style:none;font-size:9pt;">
								Jl. Kebon Kacang Tanah Abang
								</td>
							</tr>
							<tr>
							<td style="width:10px;padding:1px;border-style:none;font-size:9pt;">
								Mangga Dua 
								</td>
								<td style="width:1px;border-style:none;font-size:9pt;">
								:
								</td>
								<td style="border-style:none;font-size:9pt;">
								Ruko Textile Mangga Dua
								</td>
							</tr>
							<tr>
							<td style="width:10px;padding:1px;border-style:none;font-size:9pt;">
								Bukit Tinggi 
								</td>
								<td style="width:1px;border-style:none;font-size:9pt;">
								:
								</td>
								<td style="border-style:none;font-size:9pt;">
								Jl. Parak Kubang 
								</td>
                            </tr>
    
                        </table>
                       
					</td>
                </tr>
                
            </caption>
            
            <!-- <thead> -->
            <tr>
                    <td colspan="4">
                    <hr style="border-bottom:4px solid black;"></hr>
                    <hr style="border-bottom:1px solid black;"></hr></td>
                   
                </tr>
               <tr>
                    <td colspan="4" style="border-top:0px solid black;"><center><font style="font-size:18pt;font-weight:bold"><u>SURAT JALAN</u></font><br>
                    No:{{ $invoice->pengiriman_id }}</td>
                   
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                   
                </tr>
                <tr>
                    <td>No. Polisi:</td>
                    <td>....................</td>
                    <td>Hari:</td>
                    <td>....................</td>
                </tr>
                <tr>
                    <td>Nama Supir:</td>
                    <td>....................</td>
                    <td>Tanggal:</td>
                    <td>....................</td>
                </tr>
                <tr>
                    <td>Dari:</td>
                    <td><b>Jakarta</b></td>
                    <td>Jam:</td>
                    <td>....................</td>
                </tr>
                <tr>
                    <td>Tujuan:</td>
                    <td><b>Bukit Tinggi</b></td>
                    <td>Trip:</td>
                    <td>....................</td>
                </tr>
            <!-- </thead>
            <tbody> -->
                <tr>
                    <td colspan="4">&nbsp;</td>
                   
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid black;">Jenis Muatan:</td>
                    <td colspan="2" style="border: 1px solid black;">&nbsp;</td>
                    
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid black;">Upah Mobil:</td>
                    <td colspan="2" style="border: 1px solid black;">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid black;">Uang Jalan Dari Jakarta:</td>
                    <td colspan="2" style="border: 1px solid black;">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid black;">Uang Sisa Bayar Bukittinggi:</td>
                    <td colspan="2" style="border: 1px solid black;">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid black;">No. Rekap Barang:</td>
                    <td colspan="2" style="border: 1px solid black;">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid black;">Keterangan:</td>
                    <td style="border: 1px solid black;">&nbsp;</td>
                    <td style="border: 1px solid black;text-align:right;">&nbsp;Kg</td>
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                   
                </tr>
                <tr>
                    <td colspan="4"><small>NB:<i>Harap dilaporkan ke pengurus setempat</i></small></td>
                   
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                   
                </tr>
				<tr>
                
                    <td style="height:100px;text-align:center;vertical-align: top;" >Pengurus Jakarta</td>
                    <td style="height:100px;text-align:center;vertical-align: top;" colspan="2">Sopir</td>
                    <td style="height:100px;text-align:center;vertical-align: top;">Pengurus Bukit Tinggi</td>
                </tr>
                <tr>
                
                    <td style="text-align:center;" >(................)</td>
                    <td style="text-align:center;" colspan="2">(................)</td>
                    <td style="text-align:center;">(................)</td>
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                   
                </tr>
                <tr>
                    <!-- <td colspan="2" style="border: 0px solid black;">No. HP Supir,</td> -->
                    <td colspan="4" style="border: 0px solid black;"><small>No.HP Supir, 1. 08.............................. 2.08.................................</small></td>
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