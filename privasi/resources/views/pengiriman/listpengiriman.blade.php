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
                <h2>List Pengiriman</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:100%">
                  <input type="hidden" id="userid" value="">
                  <a href="/siskargo/addpengiriman" class="btn btn-success" title="Tambah Pengiriman" data-target=".bs-example-modal-smadd" style="float:right;display:block;" 
                  id="tomboltambah"><i class="fa fa-plus"></i> Tambah Pengiriman</a></br>
                  </br>
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
						  <th>Status</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show_data">
                    
                      	 
                      @foreach($data_pengiriman as $pengiriman)
                      <tr style="background-color:#F7F7F7;color:#000000;">
                          <td>{{$pengiriman->pengiriman_id}}</td>							
						  <td>{{$pengiriman->pengiriman_tgl}}</td>
						  <td>{{$pengiriman->pengiriman_namapengirim}}</td>							
						  <td>{{$pengiriman->pengiriman_kotapengirim}}</td>
						  <!-- <td>{{$pengiriman->pengiriman_namapenerima}}</td>							
						  <td>{{$pengiriman->pengiriman_kotapenerima}}</td> -->
						  <td>{{$pengiriman->jenis_nama}}</td>
						  <td>{{$pengiriman->status_desc}}</td>
                          <td>
                            <!-- <a href="/siskargo/editpengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-primary">Edit
							<a href="/siskargo/deletepengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-danger item_deletepengiriman" data-id="{{$pengiriman->pengiriman_id}}">Delete -->
							
							@if (auth()->user()->level == '1')
							<a href="/siskargo/detailpengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-primary">Detail</a>
							@else
							<a href="/siskargo/detailpengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-primary">Detail</a>
							@if ($pengiriman->pengiriman_statuskirim == '1')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengiriman_id}}" data-status="2">Kirim</a>
							@elseif ($pengiriman->pengiriman_statuskirim == '2')
							<a href="/siskargo/updatestatuspengiriman/{{$pengiriman->pengiriman_id}}" class="btn btn-success item_updatestatuspengiriman" data-id="{{$pengiriman->pengiriman_id}}" data-status="3">Sampai Tujuan</a>
							@else
							<label>Selesai</label>
							@endif
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
		</script>
        </body>
</html>