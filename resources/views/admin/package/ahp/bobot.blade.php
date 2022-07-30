@extends('admin.layouts.app')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Perhitungan Matriks</h3>
			<div class="row">
				<div class="panel col-md-6 col-md-offset-3">
					<div class="panel-heading">
						<h3 class="panel-title">Nilai Perbandingan Matriks</h3>
					</div>
					<div class="panel-body">
						<form action="{{ route('postbobot') }}" method="post">
							@csrf
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nama Kriteria 1</th>
										<th>Nilai Banding</th>
										<th>Nama Kriteria 2</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Harga</td>
										<td>
											<select class="form-control" name="cbhg">
												<option value="1">Harga Sama Penting dengan Garasi (Nilai = 1)</option>
												<option value="2">Harga Lebih Penting daripada Garasi (Nilai = 2)</option>
												<option value="3">Harga Sangat Penting daripada Garasi (Nilai = 3)</option>
											</select>
										</td>
										<td>Garasi</td>
									</tr>
									<tr>
										<td>Harga</td>
										<td>
											<select class="form-control" name="cbhs">
												<option value="1">Harga Sama Penting dengan Luas (Nilai = 1)</option>
												<option value="2">Harga Lebih Penting daripada Luas (Nilai = 2)</option>
												<option value="3">Harga Sangat Penting daripada Luas (Nilai = 3)</option>
											</select>
										</td>
										<td>Luas</td>
									</tr>
									<tr>
										<td>Harga</td>
										<td>
											<select class="form-control" name="cbhk">
												<option value="1">Harga Sama Penting dengan Kamar (Nilai = 1)</option>
												<option value="2">Harga Lebih Penting daripada Kamar (Nilai = 2)</option>
												<option value="3">Harga Sangat Penting daripada Kamar (Nilai = 3)</option>
											</select>
										</td>
										<td>Kamar</td>
									</tr>
									<tr>
										<td>Harga</td>
										<td>
											<select class="form-control" name="cbhl">
												<option value="1">Harga Sama Penting dengan Lantai (Nilai = 1)</option>
												<option value="2">Harga Lebih Penting daripada Lantai (Nilai = 2)</option>
												<option value="3">Harga Sangat Penting daripada Lantai (Nilai = 3)</option>
											</select>
										</td>
										<td>Lantai</td>
									</tr>
									<tr>
										<td>Garasi</td>
										<td>
											<select class="form-control" name="cbgh">
												<option value="1">Garasi Sama Penting dengan Harga (Nilai = 1)</option>
												<option value="2">Garasi Lebih Penting daripada Harga (Nilai = 2)</option>
												<option value="3">Garasi Sangat Penting daripada Harga (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga</td>
									</tr>
									<tr>
										<td>Garasi</td>
										<td>
											<select class="form-control" name="cbgs">
												<option value="1">Garasi Sama Penting dengan Luas (Nilai = 1)</option>
												<option value="2">Garasi Lebih Penting daripada Luas (Nilai = 2)</option>
												<option value="3">Garasi Sangat Penting daripada Luas (Nilai = 3)</option>
											</select>
										</td>
										<td>Luas</td>
									</tr>
									<tr>
										<td>Garasi</td>
										<td>
											<select class="form-control" name="cbgk">
												<option value="1">Garasi Sama Penting dengan Kamar (Nilai = 1)</option>
												<option value="2">Garasi Lebih Penting daripada Kamar (Nilai = 2)</option>
												<option value="3">Garasi Sangat Penting daripada Kamar (Nilai = 3)</option>
											</select>
										</td>
										<td>Kamar</td>
									</tr>
									<tr>
										<td>Garasi</td>
										<td>
											<select class="form-control" name="cbgl">
												<option value="1">Garasi Sama Penting dengan Lantai (Nilai = 1)</option>
												<option value="2">Garasi Lebih Penting daripada Lantai (Nilai = 2)</option>
												<option value="3">Garasi Sangat Penting daripada Lantai (Nilai = 3)</option>
											</select>
										</td>
										<td>Lantai</td>
									</tr>
									<tr>
										<td>Luas</td>
										<td>
											<select class="form-control" name="cbsh">
												<option value="1">Luas Sama Penting dengan Harga (Nilai = 1)</option>
												<option value="2">Luas Lebih Penting daripada Harga (Nilai = 2)</option>
												<option value="3">Luas Sangat Penting daripada Harga (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga</td>
									</tr>
									<tr>
										<td>Luas</td>
										<td>
											<select class="form-control" name="cbsg">
												<option value="1">Luas Sama Penting dengan Garasi (Nilai = 1)</option>
												<option value="2">Luas Lebih Penting daripada Garasi (Nilai = 2)</option>
												<option value="3">Luas Sangat Penting daripada Garasi (Nilai = 3)</option>
											</select>
										</td>
										<td>Garasi</td>
									</tr>
									<tr>
										<td>Luas</td>
										<td>
											<select class="form-control" name="cbsk">
												<option value="1">Luas Sama Penting dengan Kamar (Nilai = 1)</option>
												<option value="2">Luas Lebih Penting daripada Kamar (Nilai = 2)</option>
												<option value="3">Luas Sangat Penting daripada Kamar (Nilai = 3)</option>
											</select>
										</td>
										<td>Kamar</td>
									</tr>
									<tr>
										<td>Luas</td>
										<td>
											<select class="form-control" name="cbsl">
												<option value="1">Luas Sama Penting dengan Lantai (Nilai = 1)</option>
												<option value="2">Luas Lebih Penting daripada Lantai (Nilai = 2)</option>
												<option value="3">Luas Sangat Penting daripada Lantai (Nilai = 3)</option>
											</select>
										</td>
										<td>Lantai</td>
									</tr>
									<tr>
										<td>Kamar</td>
										<td>
											<select class="form-control" name="cbkh">
												<option value="1">Kamar Sama Penting dengan Harga (Nilai = 1)</option>
												<option value="2">Kamar Lebih Penting daripada Harga (Nilai = 2)</option>
												<option value="3">Kamar Sangat Penting daripada Harga (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga</td>
									</tr>
									<tr>
										<td>Kamar</td>
										<td>
											<select class="form-control" name="cbkg">
												<option value="1">Kamar Sama Penting dengan Garasi (Nilai = 1)</option>
												<option value="2">Kamar Lebih Penting daripada Garasi (Nilai = 2)</option>
												<option value="3">Kamar Sangat Penting daripada Garasi (Nilai = 3)</option>
											</select>
										</td>
										<td>Garasi</td>
									</tr>
									<tr>
										<td>Kamar</td>
										<td>
											<select class="form-control" name="cbks">
												<option value="1">Kamar Sama Penting dengan Luas (Nilai = 1)</option>
												<option value="2">Kamar Lebih Penting daripada Luas (Nilai = 2)</option>
												<option value="3">Kamar Sangat Penting daripada Luas (Nilai = 3)</option>
											</select>
										</td>
										<td>Luas</td>
									</tr>
									<tr>
										<td>Kamar</td>
										<td>
											<select class="form-control" name="cbkl">
												<option value="1">Kamar Sama Penting dengan Lantai (Nilai = 1)</option>
												<option value="2">Kamar Lebih Penting daripada Lantai (Nilai = 2)</option>
												<option value="3">Kamar Sangat Penting daripada Lantai (Nilai = 3)</option>
											</select>
										</td>
										<td>Lantai</td>
									</tr>
									<tr>
										<td>Lantai</td>
										<td>
											<select class="form-control" name="cblh">
												<option value="1">Lantai Sama Penting dengan Harga (Nilai = 1)</option>
												<option value="2">Lantai Lebih Penting daripada Harga (Nilai = 2)</option>
												<option value="3">Lantai Sangat Penting daripada Harga (Nilai = 3)</option>
											</select>
										</td>
										<td>Harga</td>
									</tr>
									<tr>
										<td>Lantai</td>
										<td>
											<select class="form-control" name="cblg">
												<option value="1">Lantai Sama Penting dengan Garasi (Nilai = 1)</option>
												<option value="2">Lantai Lebih Penting daripada Garasi (Nilai = 2)</option>
												<option value="3">Lantai Sangat Penting daripada Garasi (Nilai = 3)</option>
											</select>
										</td>
										<td>Garasi</td>
									</tr>
									<tr>
										<td>Lantai</td>
										<td>
											<select class="form-control" name="cblk">
												<option value="1">Lantai Sama Penting dengan Kamar (Nilai = 1)</option>
												<option value="2">Lantai Lebih Penting daripada Kamar (Nilai = 2)</option>
												<option value="3">Lantai Sangat Penting daripada Kamar (Nilai = 3)</option>
											</select>
										</td>
										<td>Kamar</td>
									</tr>
									<tr>
										<td>Lantai</td>
										<td>
											<select class="form-control" name="cbls">
												<option value="1">Lantai Sama Penting dengan Luas (Nilai = 1)</option>
												<option value="2">Lantai Lebih Penting daripada Luas (Nilai = 2)</option>
												<option value="3">Lantai Sangat Penting daripada Luas (Nilai = 3)</option>
											</select>
										</td>
										<td>Luas</td>
									</tr>
								</tbody>
								<br>
							</table>
							<div class="row">
								<div class="col-md-6">
									<button type="submit" class="btn btn-primary btn-block">Hitung</button>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-warning btn-block" onclick="kembalibobot();">Cancel</button>
								</div>
							</div>
						</form>
					</div>
					<script>
                        function kembalibobot() {
                            window.location.href = "/admin/alternative";
                        }
                    </script>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection