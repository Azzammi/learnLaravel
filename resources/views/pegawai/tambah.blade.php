<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input class="form-control" type="text" name="nama" required="required"> <br/>
		Jabatan <input class="form-control" type="text" name="jabatan" required="required"> <br/>
		Umur <input class="form-control" type="number" name="umur" required="required"> <br/>
		Alamat <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
	</form>

</body>
</html>