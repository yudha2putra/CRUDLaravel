<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>CRUD Pada Laravel</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				CRUD Laravel Data Pegawai Yudha Dwiputra - <a href="https://github.com/yudha2putra/CRUDLaravel" target="_blank">Github Project</a>
			</div>
			<div class="card-body">
				<a href="/pegawai/tambah" class="btn btn-primary">Input Pegawai Baru</a>
				<br/>
				<br/>
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Jabatan</th>
							<th>Umur</th>
							<th>Alamat</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pegawai as $p)
						<tr>
							<td>{{ $p->pegawai_nama }}</td>
							<td>{{ $p->pegawai_jabatan }}</td>
							<td>{{ $p->pegawai_umur }}</td>
							<td>{{ $p->pegawai_alamat }}</td>
							<td>
								<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
								<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
			</div>
		</div>
	</div>
</body>
</html>
