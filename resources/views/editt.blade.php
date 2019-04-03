<!DOCTYPE html>
<html>
<head>
	<title>aaa</title>
</head>
<body>

	
	<h3>Edit Pegawai</h3>

	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($kategori as $row)
	<form action="/kategori/updatee" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $row->id }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $row->id }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $row->nama }}"> <br/>
		deskripsi <input type="text" required="required" name="deskripsi" value="{{ $row->deskripsi }}"> <br/>
        
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>