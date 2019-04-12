<!DOCTYPE html>
<html>
<head>
	<title>abcd</title>
</head>
<body>


	<h3>Data Pelanggan</h3>

	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/kategori/abcd" method="post">
		{{ csrf_field() }}
		<!-- Id <input type="text" name="id" required="required"> <br/> -->
		Nama <input type="text" name="nama" required="required"> <br/>
		deskripsi <input type="text" name="deskripsi" required="required"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>