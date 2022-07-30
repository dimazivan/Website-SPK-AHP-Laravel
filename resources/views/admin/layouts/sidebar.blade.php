<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				@if (auth()->user()->role=='Admin')
				<li><a href="/admin"><i class="fa fa-university"></i> <span>Dashboard</span></a></li>
				@endif
				<li><a href="/home"><i class="lnr lnr-home"></i> <span>Landing Page</span></a></li>
				@if (auth()->user()->role=='Admin')
				<li>
					<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="fa fa-file"></i> <span>Data Master</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages1" class="collapse ">
						<ul class="nav">
							<li><a href="/admin/user"><i class="lnr lnr-user"></i> <span>User</span></a></li>
							<li><a href="/admin/rumah"><i class="lnr lnr-map-marker"></i> <span>Rumah</span></a></li>
							<li><a href="/admin/kriteria"><i class="fa fa-random"></i> <span>Kriteria</span></a></li>
							<li><a href="/admin/sub"><i class="fa fa-random"></i> <span>Sub Kriteria</span></a></li>
						</ul>
					</div>
				</li>
				@endif
				<li>
					<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fa fa-line-chart"></i> <span>AHP</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages2" class="collapse ">
						<ul class="nav">
							@if (auth()->user()->role=='Admin')
							<li><a href="/admin/alternative"><i class="fa fa-random"></i><span>Alternative</span></a></li>
							@endif
							<li><a href="/ahp/bobot"><i class="fa fa-random"></i>Bobot Kriteria</a></li>
							<!-- <li><a href="/admin/ahp/bobot/postbobot"><i class="fa fa-random"></i>Normalisasi Matriks</a></li> -->
							<!-- <li><a href="/admin/ahp/hasil"><i class="fa fa-random"></i>Hasil Perhitungan</a></li> -->
							<li><a href="/ahp/bobot/kesimpulan"><i class="fa fa-random"></i>Laporan Perhitungan</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</div>