<!DOCTYPE html>
<html>
<head>
	<title>aaa</title>
</head>
<body>

	
	<h3>Edit Data</h3>

	<a href="/transaksi"> Kembali</a>
	
	<br/>
	<br/>

	
	<form action="{{ route ('edittransaksi', $transaksi->id)}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $transaksi->id }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $transaksi->id }}"> <br/>
		id <input type="text" required="required" name="id_produk" value="{{ $transaksi->id_produk }}"> <br/>
		status <input type="text" required="required" name="status" value="{{ $transaksi->status }}"> <br/>
		keterangan <input type="text" required="required" name="keterangan" value="{{ $transaksi->keterangan }}"> <br/>
        
		
		<input type="submit" value="Simpan Data">
	</form>
	
		
	

</body>
</html>