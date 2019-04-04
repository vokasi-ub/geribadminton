<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use DB;
use App\Quotation;


class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /*return kategori::all()->toArray();*/

        $transaksis = transaksi::all();
        return view('transaksi', compact('transaksis'));


    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tambah3()
{
 
	// memanggil view tambah
	return view('tambah3');
 
}

// method untuk insert data ke table pegawai
public function abcd3(Request $request)
{
	// insert data ke table pegawai
	DB::table('transaksi')->insert([
		'id' => $request->id,
		'status' => $request->status,
        'keterangan' => $request->keterangan,
        
		
	]);
	// alihkan halaman ke halaman kategori
	return redirect('/transaksi');

}

// method untuk edit data pegawai
public function editt3($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$transaksi = DB::table('transaksi')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editt3',['transaksi' => $transaksi]);

}

// update data pegawai
public function updatee3(Request $request)
{
	// update data pegawai
	 DB::table('transaksi')->where('id',$request->id)->update([
		'id' => $request->id,
		'status' => $request->status,
        'keterangan' => $request->keterangan,
        
		
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
}
// method untuk hapus data pegawai
public function hapuss3($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('transaksi')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
}
}
