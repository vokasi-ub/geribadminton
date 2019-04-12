<!DOCTYPE html>
<html>
<head>
	<title>aaa</title>
</head>
<body>

	
	<h3>Edit Data</h3>

	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>

	<form action="{{ route ('editkategori', $kategori->id)}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $kategori->id }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $kategori->id }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $kategori->nama }}"> <br/>
		deskripsi <input type="text" required="required" name="deskripsi" value="{{ $kategori->deskripsi }}"> <br/>
        
		
		<input type="submit" value="Simpan Data">
	</form>
		

</body>
</html>