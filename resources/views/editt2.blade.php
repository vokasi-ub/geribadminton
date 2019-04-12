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

	
	<form action="{{ route ('editproduk', $produk->id)}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $produk->id }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $produk->id }}"> <br/>
		nama <input type="text" required="required" name="nama" value="{{ $produk->nama }}"> <br/>
		deskripsi <input type="text" required="required" name="deskripsi" value="{{ $produk->deskripsi }}"> <br/>
        stok <input type="text" required="required" name="stok" value="{{ $produk->stok }}"> <br/>
		harga <input type="text" required="required" name="harga" value="{{ $produk->harga }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>


	
		

</body>
</html>