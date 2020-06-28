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
				<h2>Input Barang Kiriman</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:100%">
                <form id="form-addpengiriman" data-parsley-validate class="form-horizontal form-label-left" method="post" >
                    {{csrf_field()}}
					<div class="form-group">
						<label for="pengiriman_tgl" class="control-label col-md-3 col-sm-3 col-xs-12" >Tanggal </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_tgl" name="pengiriman_tgl" value="{{$pengiriman->pengiriman_tgl}}"/>
							
						
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_jenisbrg">Jenis Barang </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_jenisbrg" name="pengiriman_jenisbrg" aria-describedby="pengiriman_jenisbrg" placeholder="Nama Pengirim" value="{{$pengiriman->jenis_nama}}">
						
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_namapengirim">Nama Pengirim 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_namapengirim" name="pengiriman_namapengirim" aria-describedby="pengiriman_namapengirim" placeholder="Nama Pengirim" value="{{$pengiriman->pengiriman_namapengirim}}">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_nohppengirim" name="pengiriman_nohppengirim" aria-describedby="pengiriman_nohppengirim" placeholder="No.HP" value="{{$pengiriman->pengiriman_nohppengirim}}">
						</div>
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_alamatpengirim">Alamat Pengirim 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<textarea class="form-control col-md-7 col-xs-12" disabled id="pengiriman_alamatpengirim" name="pengiriman_alamatpengirim" aria-describedby="pengiriman_alamatpengirim">{{$pengiriman->pengiriman_alamatpengirim}}</textarea>
						</div>

					</div>
					<!-- <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_nohppengirim">No.HP Pengirim 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_nohppengirim" name="pengiriman_nohppengirim" aria-describedby="pengiriman_nohppengirim">
						</div>
					</div> -->
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_kotapengirim">Kota Asal 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_kotapengirim" name="pengiriman_kotapengirim" aria-describedby="pengiriman_kotapengirim" value="{{$pengiriman->pengiriman_kotapengirim}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_namapenerima">Nama Penerima 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_namapenerima" name="pengiriman_namapenerima" aria-describedby="pengiriman_namapenerima" placeholder="Nama Penerima" value="{{$pengiriman->pengiriman_namapenerima}}">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_nohppenerima" name="pengiriman_nohppenerima" aria-describedby="pengiriman_nohppenerima" placeholder="No.HP" value="{{$pengiriman->pengiriman_nohppenerima}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_alamatpenerima">Alamat Penerima 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<textarea class="form-control col-md-7 col-xs-12" disabled id="pengiriman_alamatpenerima" name="pengiriman_alamatpenerima" aria-describedby="pengiriman_alamatpenerima">{{$pengiriman->pengiriman_alamatpenerima}}</textarea>
					</div>
					</div>
					<!-- <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_nohppenerima">No.HP Penerima 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_nohppenerima" name="pengiriman_nohppenerima" aria-describedby="pengiriman_nohppenerima">
						</div>
					</div> -->
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_kotapenerima">Kota Tujuan 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_kotapenerima" name="pengiriman_kotapenerima" aria-describedby="pengiriman_kotapenerima" value="{{$pengiriman->pengiriman_kotapenerima}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_jumlah">Jumlah 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_jumlah" name="pengiriman_jumlah" aria-describedby="pengiriman_jumlah" value="{{$pengiriman->pengiriman_jumlah}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_panjang">Ukuran 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_panjang" name="pengiriman_panjang" aria-describedby="pengiriman_panjang" placeholder="Panjang" value="{{$pengiriman->pengiriman_penjang}}">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_lebar" name="pengiriman_lebar" aria-describedby="pengiriman_lebar" placeholder="Lebar" value="{{$pengiriman->pengiriman_lebar}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_totalberat">Total Berat 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_totalberat" name="pengiriman_totalberat" aria-describedby="pengiriman_totalberat" value="{{$pengiriman->pengiriman_totalberat}}">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengiriman_ongkir">Ongkos Kirim 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" disabled class="form-control col-md-7 col-xs-12" id="pengiriman_ongkir" name="pengiriman_ongkir" aria-describedby="pengiriman_ongkir" value="{{$pengiriman->pengiriman_ongkir}}">
						</div>
					</div>
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="created_by" name="created_by" aria-describedby="created_by" value="{{$pengiriman->created_by}}">
						
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="updated_by" name="updated_by" aria-describedby="updated_by" value="{{$pengiriman->updated_by}}">
						
						
                    
                    </form>
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
		$('#myDatepicker2').datetimepicker({
        		format: 'DD/MM/YYYY'
			});
        $('#form-addpengiriman').on('submit',function(e) {
			var form = $('#form-addpengiriman')[0];
			var data = new FormData(form);
			swal({
			  title: "Simpan Data",
			  text: "Apakah anda ingin menyimpan data ini ?",
			  confirmButtonText:"Yakin",
			  confirmButtonColor: "#002855",
			  cancelButtonText:"Tidak",
			  showCancelButton: true,
			  closeOnConfirm: false,
			  type: "warning",
			  showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					type: "POST",
					enctype: 'multipart/form-data',
					url:"{{url('/savepengiriman')}}",
					data: data,
					processData: false,
					contentType: false,
					cache: false,
					success:function(e){
						if (e !== "error") {
						swal({
						  title: "Success",
						  confirmButtonColor: "#002855",
						  text: "Data berhasil disimpan !.",
						  type: "success"
						},function(){
							window.location='/siskargo/listpengiriman';
						  });
						}
						else{
						swal({
						  title: "Failed",
						  confirmButtonColor: "#002855",
						  text: e+"1",
						  type: "error"
						});
						}
						
					},
					error:function(xhr, ajaxOptions, thrownError){
						swal({
						  title: "Failed",
						  confirmButtonColor: "#002855",
						  text: e+"2",
						  type: "error"
						});
					}
					
				});
				return false;
			});
			e.preventDefault(); 
		  });
		  
    </script> 
    </body>
</html>
        