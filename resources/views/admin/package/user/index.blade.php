@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Master User</h3>
			<div class="row">
				<a href="/admin/user/form">
					<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data User</button>
				</a>
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Data User</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Lengkap</th>
									<th>Email</th>
									<th>Role</th>
									<th>Data Masuk</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@if($data_user->count() > 0)
								@foreach($data_user as $DU)
								<tr>
									<td>
										<?php
										echo $no++;
										?>
									</td>
									<td>{{ $DU->name }}</td>
									<td>{{ $DU->email }}</td>
									<td>{{ $DU->role }}</td>
									<th>{{ $DU->created_at }}</th>
									<td>
										<button type="button" class="btn btn-info btn-toastr" href="">
											<a href="/admin/user/formedit/{{ $DU->id }}" style="color:white;">Update</a>
										</button>
										<button type="button" class="btn btn-danger btn-toastr">
											<a href="/admin/user/hapususer/{{ $DU->id }}" style="color:white;">Delete</a>
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
						<!-- <nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav> -->
					</div>
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection