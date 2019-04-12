<!DOCTYPE html>
<html>
<head>
	<title>abcd</title>
</head>
<body>


	<h3>Data Pelanggan</h3>

	<a href="/transaksi"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/transaksi/abcd3" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id" required="required"> <br/>
		Id_produk <input type="text" name="id_produk" required="required"> <br/>
		status <input type="text" name="status" required="required"> <br/>
		keterangan <input type="text" name="keterangan" required="required"> <br/>
			

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>