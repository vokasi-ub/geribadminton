<!DOCTYPE html>
<html>
<head>
	<title>abcd</title>
</head>
<body>


	<h3>Data Pegawai</h3>

	<a href="/produk"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/produk/abcd2" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		deskripsi <input type="text" name="deskripsi" required="required"> <br/>
		stok <input type="text" name="stok" required="required"> <br/>
		harga <input type="text" name="harga" required="required"> <br/>
		

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>