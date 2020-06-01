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
				<h2>Tambah Jenis Barang</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:100%">
                <form id="form-addjenisbrg" data-parsley-validate class="form-horizontal form-label-left" method="post" >
                    {{csrf_field()}}
                  <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_nama">Jenis Barang 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control col-md-7 col-xs-12" id="jenis_nama" name="jenis_nama" aria-describedby="nama">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_desc">Deskripsi 
                                </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control col-md-7 col-xs-12" id="jenis_desc" name="jenis_desc" aria-describedby="jenis_desc">
                                </div>
					</div>
					<input type="hidden" class="form-control col-md-7 col-xs-12" id="created_by" name="created_by" aria-describedby="created_by" value="{{auth()->user()->id}}">
                    <div class="form-group">
					<input type="hidden" class="form-control col-md-7 col-xs-12" id="updated_by" name="updated_by" aria-describedby="updated_by" value="{{auth()->user()->id}}">
                    <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary" id="savebtn">Simpan</button>
                      
                                </div>
                              </div>
                    
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
        $('#form-addjenisbrg').on('submit',function(e) {
			var form = $('#form-addjenisbrg')[0];
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
					url:"{{url('/savejenisbrg')}}",
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
							window.location='/siskargo/listjenisbrg';
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
        