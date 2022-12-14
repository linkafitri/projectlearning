@extends('admin.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Paket</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{route('pakets.update', $editData->id)}}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
								<h5>Nama Paket <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="namapaket" value="{{$editData->namapaket}}" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group">
								<h5>Deskripsi <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="deskripsi" value="{{$editData->deskripsi}}" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
                            </div>

						<div class="col-md-6">
                            <div class="form-group">
								<h5>Harga Paket <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="number" name="hargapaket" value="{{$editData->hargapaket}}" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
                            </div>

						<div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
								<h5>Foto <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="file" name="foto" value="{{$editData->foto}}" class="form-control" required data-validation-required-message="This field is required"> 
									<img src="{{ asset('upload/pakets/'.$editData->foto)}}" width="70px" height="70px" alt="Image">
								</div>
							</div>
                            </div>
                            
                            </div>
                        </div>
                        <!-- end row -->
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<script src="{{asset('backend/js/pages/form-validation.js')}}"></script>