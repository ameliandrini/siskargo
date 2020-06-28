@include('template/headermeta')

<!-- @section('content') -->
        <!-- page content -->
        <body class="nav-md" progress_bar="true">
  
    <div class="container body">
      <div class="main_container">
      @include('template/menu')
@include('template/topmenu')
        <div class="right_col" role="main">
           <!--marquee-->
		   @include('template/headerinfo')
		  <!-- end marquee-->
		  <!--list userakses-->
			<div class="row">
			
			<div class="col-md-12 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
				<h2>Detail Pengiriman</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" >
                <form id="form-detailpengiriman" data-parsley-validate class="form-horizontal form-label-left" method="post" >
					{{csrf_field()}}
					
					<div class="form-group">
						<label for="pengirimanh_harijln" class="control-label col-md-3 col-sm-3 col-xs-12" >Waktu Pengiriman </label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_harijln" name="pengirimanh_harijln" aria-describedby="pengirimanh_harijln" placeholder="Hari" value="{{$pengiriman->pengirimanh_harijln}}">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_tgljln" name="pengirimanh_tgljln" aria-describedby="pengirimanh_tgljln" placeholder="Tanggal" value="{{$pengiriman->pengirimanh_tgljln}}">	
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_supir">Identitas Mobil 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_nopol" name="pengirimanh_nopol" aria-describedby="pengirimanh_nopol" placeholder="No.Polisi" value="{{$pengiriman->pengirimanh_nopol}}">
						</div>
						<!-- <div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="pengirimanh_supir" name="pengirimanh_supir" aria-describedby="pengirimanh_supir" placeholder="Nama Supir">
						</div> -->
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_supir" name="pengirimanh_supir" aria-describedby="pengirimanh_supir" placeholder="No.Polisi" value="{{$pengiriman->name}}">
						</div>
						
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_trip">Trip Ke </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_trip" name="pengirimanh_trip" aria-describedby="pengirimanh_trip" placeholder="Trip" value="{{$pengiriman->pengirimanh_trip}}">
						
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_jenismuatan">Jenis Muatan </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="jenis_nama" name="jenis_nama" aria-describedby="jenis_nama" placeholder="Jenis Muatan" value="{{$pengiriman->jenis_nama}}">
						
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_upahmobil">Upah Mobil 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="number" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_upahmobil" name="pengirimanh_upahmobil" aria-describedby="pengirimanh_upahmobil" value="{{$pengiriman->pengirimanh_upahmobil}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_uangjalanjkt">Uang Jalan Jakarta 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="number" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_uangjalanjkt" name="pengirimanh_uangjalanjkt" aria-describedby="pengirimanh_uangjalanjkt" value="{{$pengiriman->pengirimanh_uangjalanjkt}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_uangsisabkt">Uang Sisa Bayar Bukit Tinggi 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="number" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_uangsisabkt" name="pengirimanh_uangsisabkt" aria-describedby="pengirimanh_uangsisabkt" value="{{$pengiriman->pengirimanh_uangsisabkt}}">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_berat">Keterangan 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="number" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_ket" name="pengirimanh_ket" aria-describedby="pengirimanh_ket" placeholder="Keterangan" value="{{$pengiriman->pengirimanh_ket}}">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="number" disabled class="form-control col-md-7 col-xs-12" id="pengirimanh_berat" name="pengirimanh_berat" aria-describedby="pengirimanh_berat" placeholder="Berat" value="{{$pengiriman->pengirimanh_berat}}">
						</div>
					</div>
					
					
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="created_by" name="created_by" aria-describedby="created_by" value="{{auth()->user()->id}}">
						
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="updated_by" name="updated_by" aria-describedby="updated_by" value="{{auth()->user()->id}}">
						
					
					
					
                    
					</form>
					
					</div>
				<div class="x_content" >
				
			
						<table id="mydata" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
						  <th>No.Resi</th>
						  <th>Tanggal</th>
						  <th>Nama Pengirim</th>
						  <th>Kota Asal</th>
						  <!-- <th>Nama Penerima</th>
						  <th>Kota Tujuan</th> -->
						  <th>Jenis Barang</th>
						  
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show_data">
                    
                      	 
                      @foreach($data_pengiriman as $pengiriman)
                      <tr style="background-color:#F7F7F7;color:#000000;">
                          <td>{{$pengiriman->pengirimand_brgid}}</td>							
						  <td>{{$pengiriman->pengiriman_tgl}}</td>
						  <td>{{$pengiriman->pengiriman_namapengirim}}</td>							
						  <td>{{$pengiriman->pengiriman_kotapengirim}}</td>
						  <!-- <td>{{$pengiriman->pengiriman_namapenerima}}</td>							
						  <td>{{$pengiriman->pengiriman_kotapenerima}}</td> -->
						  <td>{{$pengiriman->jenis_nama}}</td>
						  
                          <td>
                            <!-- <a href="/siskargo/editpengiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-primary">Edit
							<a href="/siskargo/deletepengiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-danger item_deletepengiriman" data-id="{{$pengiriman->pengirimand_brgid}}">Delete -->
							
							@if (auth()->user()->level == '1')
							<a href="/siskargo/detailbarangkiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-primary">Detail</a>
							<a href="/siskargo/invoicepengiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-danger">Cetak Tanda Terima</a>
							<!-- <a href="/siskargo/suratjalan/{{$pengiriman->pengirimand_brgid}}" class="btn btn-warning">Cetak Surat Jalan</a> -->
							<!-- @if ($pengiriman->pengiriman_statuskirim == '1')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengirimand_brgid}}" data-status="2">Kirim</a>
							@elseif ($pengiriman->pengiriman_statuskirim == '2')
							<label>Sampai Tujuan</label>
							@else
							<label>Selesai</label>
							@endif -->
							@else
							<a href="/siskargo/detailbarangkiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-primary">Detail</a>
							<!-- @if ($pengiriman->pengiriman_statuskirim == '1')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengirimand_brgid}}" data-status="2">Kirim</a>
							@elseif ($pengiriman->pengiriman_statuskirim == '2')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengirimand_brgid}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengirimand_brgid}}" data-status="3">Sampai Tujuan</a>
							@else
							<label>Selesai</label>
							@endif -->
							@endif
						</td>
                        </tr>
                      @endforeach
                      </tbody>
					</table>
					
			</div>
			<div class="x_content" >
			
					<a href="/siskargo/suratjalan/{{$pengiriman->pengirimanh_id}}" class="btn btn-warning">Cetak Surat Jalan</a>
			
					
			</div>
              </div>
            </div>
			
			<!-- end widget -->
			  		  
			</div>
			
			
			
			<!--end list userakses-->
			
        </div>
        <!-- /page content -->
        @include('template/footermeta')
		<script type="text/javascript">
		$(document).ready(function(){
		$('#mydata').dataTable();
		});
	</script>
    </body>
</html>
        