@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master Kriteria</h3>
			<div class="row">
				<a href="/admin/kriteria/form">
					<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data Kriteria</button>
				</a>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data Kriteria</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Id Kriteria</th>
									<th>Nama Kriteria</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@if($data_kriteria->count() > 0)
								@foreach($data_kriteria as $DK)
								<tr>
									<td>
										<?php
										echo $no++;
										?>
									</td>
									<td>{{ $DK->code }}</td>
									<td>{{ $DK->name }}</td>
									<td>
										<button type="button" class="btn btn-info btn-toastr" href="">
											<a href="/admin/kriteria/formedit/{{ $DK->id }}" style="color:white;">Update</a>
										</button>
									</td>
								</tr>
								@endforeach
								@else
								<tr>
									<td colspan="6">Data tidak tersedia</td>
								</tr>
								@endif
							</tbody>
						</table>
					</div>
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection