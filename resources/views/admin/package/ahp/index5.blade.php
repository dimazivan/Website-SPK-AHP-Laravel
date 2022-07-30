@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Hasil Perangkingan</h3>
			<div class="row">
				<!-- TABLE STRIPED -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Hasil Perangkingan</h3>
					</div>
					<div class="panel-body">
						<form action="/admin/ahp/test">
							<!-- <form action="/admin/ahp/test" method="post"> -->
							@csrf
							<table class="table table-striped">
								<thead>
									<tr>
										<th width="50px">Ranking / Nama Kriteria</th>
										<th witdh="50px">Tipe</th>
										<th width="50px">Lantai</th>
										<th width="50px">Kamar</th>
										<th width="50px">Luas</th>
										<th width="50px">Harga</th>
										<th width="50px">Garasi</th>
										<th width="50px">Local Priority</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									@if($data_hasil->count() > 0)
									@foreach($data_hasil as $DH)
									<tr>
										<td>
											<?php
											echo $no++;
											?>
										</td>
										<td><input type="text" name="" value="{{ DH->tipe }}"></td>
										@foreach()
										<td><input type="number" name="k1" value="{{ $k1 }}" readonly></td>
										@endforeach
									</tr>
									@endforeach
									<tr>
										<td>Total</td>
										<td><input type="number" name="k26" value="{{ $k26 }}" readonly></td>
										<td><input type="number" name="k27" value="{{ $k27 }}" readonly></td>
										<td><input type="number" name="k28" value="{{ $k28 }}" readonly></td>
										<td><input type="number" name="k29" value="{{ $k29 }}" readonly></td>
										<td><input type="number" name="k30" value="{{ $k30 }}" readonly></td>
									</tr>
								</tbody>
							</table>
							<div class="row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-block">Proses AHP Yuk!</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-warning btn-block" onclick="kembalibobot();">Cancel</button>
								</div>
							</div>
						</form>
					</div>
					<script>
						function kembalibobot() {
							window.location.href = "/admin/ahp/bobot";
						}
					</script>
				</div>
				<!-- END TABLE STRIPED -->
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection