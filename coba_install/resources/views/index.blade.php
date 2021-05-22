<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}"> -->
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class = "container">
		<div class = "card">
			<div class="card-body">
				<h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</h2>
				<h3>Data Pegawai</h3>
	
				<style type="text/css">
					.pagination li{
						float: left;
						list-style-type: none;
						margin:5px;
					}
				</style>

				<h4>Cari Data Pegawai</h4>
				<div class="form-group">
				</div>
				<form action="/pegawai/cari" method="GET">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai ... " value="{{ old('cari')}}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
				
				<br/>
				<br/>
			
				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
							|
							<a class="btn btn-danger btn-sm" href="/pegawai/delete/{{ $p->pegawai_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
				<br/>
				Halaman : {{ $pegawai->currentPage() }}<br/>
				Jumlah Data : {{$pegawai->total() }}<br/>
				Data Per Halaman : {{ $pegawai->perPage() }}<br/>

				{{ $pegawai->links() }}

			</div>
		</div>
	</div>
</body>
</html>