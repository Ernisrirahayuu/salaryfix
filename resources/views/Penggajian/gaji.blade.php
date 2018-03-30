@extends('layouts.gaji')

@section('content')
<!-- Header -->
			<section id="header">
				<header>
					<h1>Hallo.. {{ Auth::user()->name }}</h1>
					<p>{{ Auth::user()->email }}</p>
				</header>
				<footer>
					<a href="#first" class="button style2 scrolly-middle">Lihat Gaji Anda</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				
				<!-- <div class="inner"> -->
					<header>
						<center><h2>Rincian Gaji Anda</h2></center>
					</header>
					@if(isset($penggajian))
						<table class="table table-bordered">
							<tr>
								<td>Jabatan : {{$penggajian->Tunjangan->Pegawai->Jabatan->Nama_Jabatan}}</td>
								</tr>
							<tr>
								<td>Golongan : {{$penggajian->Tunjangan->Pegawai->Golongan->Nama_Golongan}}</td>
								</tr>
								<td>Total Gaji : <?php echo 'Rp. '.number_format($penggajian->Total_gaji, 0, ",", "."); ?></td>
							</tr>
						</table>
					@else
						<table class="table table-bordered">
							<tr>
								<td>Gaji Anda Belum Terdaftar. Silahkan Hubungi Admin</td>
							</tr>
							
						</table>
					@endif
				</div>
			</article>
		

		<section id="footer">
			<ul class="icons">
				<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		            <i class="icon-key"></i>Logout
		        </a>
		        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		            {{ csrf_field() }}
		        </form>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; 2018. SMK Assalaam Bandung Erni Sri Rahayu . </li>
				</ul>
			</div>
		</section>
@endsection