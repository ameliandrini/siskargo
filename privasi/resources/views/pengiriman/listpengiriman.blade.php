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
			<!-- Small modal -->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">

			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
			  </button>
			  <h4 class="modal-title" id="myModalLabel2">Tambah Barang</h4>
			</div>
			<div class="modal-body">
			<form id="form-additempengiriman" data-parsley-validate class="form-horizontal form-label-left" method="post" >
                    {{csrf_field()}}
					
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" style="text-align:left" for="pengirimand_brgid">No. Resi 
						</label>
						<div class="col-md-8 col-sm-8 col-xs-12">
						<!-- <select id="pengirimand_brgid" name="pengirimand_brgid" class="form-control col-md-7 col-xs-12">
						@foreach($data_barangkiriman as $barangkiriman)
							<option value="{{$barangkiriman -> pengiriman_id}}">{{$barangkiriman -> pengiriman_id.'-'.$barangkiriman -> pengiriman_namapengirim}}</option>
						@endforeach
						</select> -->
						<input type="text" class="form-control col-md-7 col-xs-12" id="pengirimand_brgid" name="pengirimand_brgid" aria-describedby="pengirimand_brgid">
						</div>
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="pengirimanh_id" name="pengirimanh_id" aria-describedby="pengirimanh_id">
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="created_by" name="created_by" aria-describedby="created_by" value="{{auth()->user()->id}}">
						
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="updated_by" name="updated_by" aria-describedby="updated_by" value="{{auth()->user()->id}}">
						
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<button type="submit" class="btn btn-primary" id="savebtn">Tambah Barang</button>
			
					</div>
			</form>
			</div>
			
		  </div>
		</div>
    </div>
    <!-- end small modal -->
			<div class="col-md-12 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                <h2>List Pengiriman</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:100%">
				  <input type="hidden" id="userid" value="">
				  	@if (auth()->user()->level == '1')
					  <a href="/siskargo/addpengiriman" class="btn btn-success" title="Tambah Pengiriman" data-target=".bs-example-modal-smadd" style="float:right;display:block;" 
                  id="tomboltambah"><i class="fa fa-plus"></i> Tambah Pengiriman</a></br>
					@else
					&nbsp;</br>
					@endif

                  
                  </br>
                  <table id="mydata" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
						  <th>No.Pengiriman</th>
						  <th>Tanggal</th>
						  <th>No. Polisi</th>
						  <th>Nama Supir</th>
						  <!-- <th>Nama Penerima</th>
						  <th>Kota Tujuan</th> -->
						  <th>Jenis Muatan</th>
						  <th>Trip</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show_data">
                    
                      	 
                      @foreach($data_pengiriman as $pengiriman)
                      <tr style="background-color:#F7F7F7;color:#000000;">
                          <td>{{$pengiriman->pengirimanh_id}}</td>							
						  <td>{{$pengiriman->pengirimanh_tgljln}}</td>
						  <td>{{$pengiriman->pengirimanh_nopol}}</td>							
						  <td>{{$pengiriman->name}}</td>
						  <!-- <td>{{$pengiriman->pengiriman_namapenerima}}</td>							
						  <td>{{$pengiriman->pengiriman_kotapenerima}}</td> -->
						  <td>{{$pengiriman->jenis_nama}}</td>
						  <td>{{$pengiriman->pengirimanh_trip}}</td>
                          <td>
                            <!-- <a href="/siskargo/editpengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-primary">Edit
							<a href="/siskargo/deletepengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-danger item_deletepengiriman" data-id="{{$pengiriman->pengiriman_id}}">Delete -->
							
							@if (auth()->user()->level == '1')
							<a href="/siskargo/detailpengiriman/{{$pengiriman->pengirimanh_id}}" class="btn btn-primary">Detail</a>
							<a href="/siskargo/suratjalan/{{$pengiriman->pengirimanh_id}}" class="btn btn-warning">Cetak Surat Jalan</a>
							<!-- @if ($pengiriman->pengiriman_statuskirim == '1')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengiriman_id}}" data-status="2">Kirim</a>
							@elseif ($pengiriman->pengiriman_statuskirim == '2')
							<label>Sampai Tujuan</label>
							@else
							<label>Selesai</label>
							@endif -->
							@else
							<a href="/siskargo/detailpengiriman/{{$pengiriman->pengirimanh_id}}" class="btn btn-primary">Detail</a>
							<a class="btn btn-success btnmodalitem" data-toggle="modal" data-target=".bs-example-modal-sm" data-pengirimanhid = "{{$pengiriman->pengirimanh_id}}">Input Barang</a>
							<!-- @if ($pengiriman->pengiriman_statuskirim == '1')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengiriman_id}}" data-status="2">Kirim</a>
							@elseif ($pengiriman->pengiriman_statuskirim == '2')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengiriman_id}}" data-status="3">Sampai Tujuan</a>
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
		$(document).on('click','.btnmodalitem',function(e) {
			var pengirimanhid = $(this).data('pengirimanhid');
			document.getElementById("pengirimanh_id").value = pengirimanhid; 
		});
			//prosesdelete
			$(document).on('click','.item_updatestatuspengiriman',function(e) {
			var user_id = $(this).data('id');
			var status = $(this).data('status');
			var title = "Ubah Status";
			var text = "Apakah anda yakin ingin mengubah status pengiriman ?";
		
			swal({
			  title: title,
			  text: text,
			  confirmButtonText:"Yakin",
			  confirmButtonColor: "#002855",
			  cancelButtonText:"Tidak",
			  showCancelButton: true,
			  closeOnConfirm: false,
			  type:"warning",
			  animation: "slide-from-top",
			  header: "Test Header",
			  showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					url:"{{url('/updatestatuspengiriman/')}}/"+user_id+"/"+status,
					dataType:'text',
					data : {user_id:user_id,status:status},
					success:function(e){
						if (e !== "error") {
						swal({
						  title: "Success",
						  confirmButtonColor: "#002855",
						  text: "Status Berhasil Diubah !",
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
						  text: e+"1",
						  type: "error"
						});
					}
					
				});
				return false;
			});
			e.preventDefault(); 
		  });
		  $('#form-additempengiriman').on('submit',function(e) {
			var form = $('#form-additempengiriman')[0];
			var data = new FormData(form);
			swal({
			  title: "Simpan Data",
			  text: "Apakah anda ingin menambahkan data barang ?",
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
					url:"{{url('/saveitempengiriman')}}",
					data: data,
					processData: false,
					contentType: false,
					cache: false,
					success:function(e){
						if (e !== "error") {
						swal({
						  title: "Success",
						  confirmButtonColor: "#002855",
						  text: "Data barang berhasil ditambahkan !.",
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