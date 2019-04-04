<!DOCTYPE html>
<html>
<head>
	<title>aaa</title>
</head>
<body>

	
	<h3>Edit Pegawai</h3>

	<a href="/transaksi"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($transaksi as $row)
	<form action="/transaksi/updatee3" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $row->id }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $row->id }}"> <br/>
		status <input type="text" required="required" name="status" value="{{ $row->status }}"> <br/>
		keterangan <input type="text" required="required" name="keterangan" value="{{ $row->keterangan }}"> <br/>
        
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>