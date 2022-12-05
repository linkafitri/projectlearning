@extends('admin.admin_master')

@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Paket</h3>
				  <a href="{{route('paket.add')}}" style="float: right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Paket</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Nama Paket</th>
								<th>Deskripsi</th>
								<th>Harga Paket</th>
								<th>Foto</th>
								<th colspan="2"> Aksi</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($allDataPaket as $key => $paket)
							<tr>
								<td>{{$paket->namapaket}}</td>
								<td>{{$paket->deskripsi}}</td>
								<td>{{$paket->hargapaket}}</td>
								<td>{{$paket->foto}}</td>
								<td>
									<a href="{{route('paket.edit', $paket->id)}}" class="btn btn-info">Edit</a>
									<a href="{{route('paket.delete', $paket->id)}}" id="delete" class="btn btn-danger">Delete</a>
								</td>
								
							</tr>
							@endforeach

						<!-- <tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								
							</tr>
						</tfoot> -->
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->


@endsection

<!-- Vendor JS -->
<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backendjs/pages/data-table.js')}}"></script>
