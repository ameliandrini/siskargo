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
				<h2>Input Pengiriman</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="height:100%">
                <form id="form-addpengiriman" data-parsley-validate class="form-horizontal form-label-left" method="post" >
                    {{csrf_field()}}
					<div class="form-group">
						<label for="pengirimanh_harijln" class="control-label col-md-3 col-sm-3 col-xs-12" >Waktu Pengiriman </label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="pengirimanh_harijln" name="pengirimanh_harijln" aria-describedby="pengirimanh_harijln" placeholder="Hari">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="input-group date" id="myDatepicker2">
							<input type="text" class="form-control col-md-7 col-xs-12" id="pengirimanh_tgljln" name="pengirimanh_tgljln" placeholder="Tanggal"/>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>	
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_supir">Identitas Mobil 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="pengirimanh_nopol" name="pengirimanh_nopol" aria-describedby="pengirimanh_nopol" placeholder="No.Polisi">
						</div>
						<!-- <div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" class="form-control col-md-7 col-xs-12" id="pengirimanh_supir" name="pengirimanh_supir" aria-describedby="pengirimanh_supir" placeholder="Nama Supir">
						</div> -->
						<div class="col-md-3 col-sm-3 col-xs-12">
						<select id="pengirimanh_supir" name="pengirimanh_supir" class="form-control col-md-7 col-xs-12">
						@foreach($data_user as $supir)
							<option value="{{$supir -> id}}">{{$supir -> name}}</option>
						@endforeach
						</select>
						</div>
						
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_trip">Trip Ke </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="pengirimanh_trip" name="pengirimanh_trip" class="form-control col-md-7 col-xs-12">
						   <option value="1">1</option>
						   <option value="2">2</option>
						   <option value="3">3</option>
						   <option value="4">4</option>
						   <option value="5">5</option>
						</select>
						
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_jenismuatan">Jenis Muatan </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="pengirimanh_jenismuatan" name="pengirimanh_jenismuatan" class="form-control col-md-7 col-xs-12">
						@foreach($data_jenisbrg as $jenisbrg)
							<option value="{{$jenisbrg -> jenis_id}}">{{$jenisbrg -> jenis_nama}}</option>
						@endforeach
						</select>
						
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_upahmobil">Upah Mobil 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="number" class="form-control col-md-7 col-xs-12" id="pengirimanh_upahmobil" name="pengirimanh_upahmobil" aria-describedby="pengirimanh_upahmobil">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_uangjalanjkt">Uang Jalan Jakarta 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="number" class="form-control col-md-7 col-xs-12" id="pengirimanh_uangjalanjkt" name="pengirimanh_uangjalanjkt" aria-describedby="pengirimanh_uangjalanjkt">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_uangsisabkt">Uang Sisa Bayar Bukit Tinggi 
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="number" class="form-control col-md-7 col-xs-12" id="pengirimanh_uangsisabkt" name="pengirimanh_uangsisabkt" aria-describedby="pengirimanh_uangsisabkt">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengirimanh_berat">Keterangan 
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="number" class="form-control col-md-7 col-xs-12" id="pengirimanh_ket" name="pengirimanh_ket" aria-describedby="pengirimanh_ket" placeholder="Keterangan">
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="number" class="form-control col-md-7 col-xs-12" id="pengirimanh_berat" name="pengirimanh_berat" aria-describedby="pengirimanh_berat" placeholder="Berat">
						</div>
					</div>
					
					
						<input type="hidden" class="form-control col-md-7 col-xs-12" id="created_by" name="created_by" aria-describedby="created_by" value="{{auth()->user()->id}}">
						
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
        