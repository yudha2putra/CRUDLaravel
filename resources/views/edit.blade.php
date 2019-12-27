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
				<a href="/pegawai" class="btn btn-primary"> Kembali</a>
				<br/>
				<br/>
				@foreach($pegawai as $p)
				<form action="/pegawai/update/{{ $p->pegawai_id }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama pegawai . ." value="{{ $p->pegawai_nama }}">
						@if($errors->has('nama'))
								<div class="text-danger">
										{{ $errors->first('nama')}}
								</div>
						@endif
					</div>
					<div class="form-group">
						<label>Jabatan</label>
						<input type="text" name="jabatan" class="form-control" placeholder="Jabatan pegawai . ." value="{{ $p->pegawai_jabatan }}">
						@if($errors->has('jabatan'))
								<div class="text-danger">
										{{ $errors->first('jabatan')}}
								</div>
						@endif
					</div>
					<div class="form-group">
						<label>Umur</label>
						<input type="number" name="umur" class="form-control" placeholder="Umur pegawai . ." value="{{ $p->pegawai_umur }}">
						@if($errors->has('umur'))
								<div class="text-danger">
										{{ $errors->first('umur')}}
								</div>
						@endif
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input name="alamat" class="form-control" placeholder="Alamat pegawai . ." value="{{ $p->pegawai_alamat }}">
						@if($errors->has('alamat'))
								<div class="text-danger">
										{{ $errors->first('alamat')}}
								</div>
						@endif
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Simpan">
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</body>
</html>
