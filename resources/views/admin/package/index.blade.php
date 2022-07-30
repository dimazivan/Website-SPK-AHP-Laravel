@extends('admin.layouts.app')
@section('content')
<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Data Terupdate</h3>
					<p class="panel-subtitle">
						<?php
						date_default_timezone_set('Asia/Jakarta');
						$tanggal = date("d/m/Y h:i:s");
						echo $tanggal;
						?>
					</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-thumbs-up"></i></span>
								<p>
									<span class="number"><?php echo $jml_alternative; ?></span>
									<span class="title">Data Rumah</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-user"></i></span>
								<p>
									<span class="number"><?php echo $jml_user; ?></span>
									<span class="title">Data User</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-bar-chart"></i></span>
								<p>
									<span class="number"><?php echo $jml_kriteria; ?></span>
									<span class="title">Data Kriteria</span>
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-line-chart"></i></span>
								<p>
									<span class="number"><?php echo $jml_sub; ?></span>
									<span class="title">Data Sub Kriteria</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
			<div class="row">
				<div class="col-md-6">
					<!-- RECENT PURCHASES -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data User Terbaru</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Lengkap</th>
										<th>Email</th>
										<th>Role</th>
										<th>Data Terbaru</th>
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
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
								<div class="col-md-6 text-right"><a href="/admin/user" class="btn btn-primary">View All Activites</a></div>
							</div>
						</div>
					</div>
					<!-- END RECENT PURCHASES -->
				</div>
				<div class="col-md-6">
					<!-- RECENT PURCHASES -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Data Alternative Terbaru</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th width="100px">Tipe Rumah</th>
										<th>Jumlah Lantai</th>
										<th>Kamar Tidur</th>
										<th width="90px">Luas Tanah</th>
										<th>Harga</th>
										<th>Garasi</th>
										<!-- <th>Keterangan</th> -->
										<!-- <th>Gambar Rumah</th> -->
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									@if($data_rumah->count() > 0)
									@foreach($data_rumah as $DR)
									<tr>
										<td>
											<?php
											echo $no++;
											?>
										</td>
										<td>{{ $DR->tipe }}</td>
										<td>{{ $DR->lantai }}</td>
										<td>{{ $DR->kamar }}</td>
										<td>{{ $DR->luas }} M<sup>2</sup></td>
										<td>Rp. {{ $DR->harga }}</td>
										<td>{{ $DR->garasi }}</td>
										<!-- <td>{{ $DR->keterangan }}</td> -->
										<!-- <td style="word-break: break-all">{{ $DR->gambar }}</td> -->
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
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
								<div class="col-md-6 text-right"><a href="/admin/rumah" class="btn btn-primary">View All Activites</a></div>
							</div>
						</div>
					</div>
					<!-- END RECENT PURCHASES -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<!-- TODO LIST -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">To-Do List</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled todo-list">
								<li>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox"><span></span>
									</label>
									<p>
										<span class="title">Restart Server</span>
										<span class="short-description">Dynamically integrate client-centric technologies without cooperative resources.</span>
										<span class="date">Oct 9, 2016</span>
									</p>
									<div class="controls">
										<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
									</div>
								</li>
								<li>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox"><span></span>
									</label>
									<p>
										<span class="title">Retest Upload Scenario</span>
										<span class="short-description">Compellingly implement clicks-and-mortar relationships without highly efficient metrics.</span>
										<span class="date">Oct 23, 2016</span>
									</p>
									<div class="controls">
										<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
									</div>
								</li>
								<li>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox"><span></span>
									</label>
									<p>
										<strong>Functional Spec Meeting</strong>
										<span class="short-description">Monotonectally formulate client-focused core competencies after parallel web-readiness.</span>
										<span class="date">Oct 11, 2016</span>
									</p>
									<div class="controls">
										<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- END TODO LIST -->
				</div>
				<div class="col-md-5">
					<!-- TIMELINE -->
					<div class="panel panel-scrolling">
						<div class="panel-heading">
							<h3 class="panel-title">Recent User Activity</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled activity-list">
								<li>
									<img src="<?php echo url('/'); ?>/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
									<p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
								</li>
								<li>
									<img src="<?php echo url('/'); ?>/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
									<p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
								</li>
								<li>
									<img src="<?php echo url('/'); ?>/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
									<p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
								</li>
								<li>
									<img src="<?php echo url('/'); ?>/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
									<p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
								</li>
								<li>
									<img src="<?php echo url('/'); ?>/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
									<p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
								</li>
							</ul>
							<button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
						</div>
					</div>
					<!-- END TIMELINE -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<!-- TASKS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">My Tasks</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled task-list">
								<li>
									<p>Updating Users Settings <span class="label-percent">23%</span></p>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
											<span class="sr-only">23% Complete</span>
										</div>
									</div>
								</li>
								<li>
									<p>Load &amp; Stress Test <span class="label-percent">80%</span></p>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</li>
								<li>
									<p>Data Duplication Check <span class="label-percent">100%</span></p>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
											<span class="sr-only">Success</span>
										</div>
									</div>
								</li>
								<li>
									<p>Server Check <span class="label-percent">45%</span></p>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
								</li>
								<li>
									<p>Mobile App Development <span class="label-percent">10%</span></p>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
											<span class="sr-only">10% Complete</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- END TASKS -->
				</div>
				<div class="col-md-4">
					<!-- VISIT CHART -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Website Visits</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<div id="visits-chart" class="ct-chart"></div>
						</div>
					</div>
					<!-- END VISIT CHART -->
				</div>
				<div class="col-md-4">
					<!-- REALTIME CHART -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">System Load</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body">
							<div id="system-load" class="easy-pie-chart" data-percent="70">
								<span class="percent">70</span>
							</div>
							<h4>CPU Load</h4>
							<ul class="list-unstyled list-justify">
								<li>High: <span>95%</span></li>
								<li>Average: <span>87%</span></li>
								<li>Low: <span>20%</span></li>
								<li>Threads: <span>996</span></li>
								<li>Processes: <span>259</span></li>
							</ul>
						</div>
					</div>
					<!-- END REALTIME CHART -->
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection