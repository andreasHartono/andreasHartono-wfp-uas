<?php

namespace App\Http\Controllers;

use App\KategoriObat;
use Illuminate\Http\Request;

class KategoriObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KategoriObat::all();
        return view('admin.data.kategori', compact('data'));
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
        $kategori = new KategoriObat();
        $kategori['nama'] = $request['nama'];
        $kategori->save();
        return redirect()->route("kategori.index")->with('status', 'Kategori Obat Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriObat  $kategoriObat
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriObat $kategoriObat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriObat  $kategoriObat
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, KategoriObat $kategoriObat)
    {
        $kategoriObat['nama'] = $request['nama'];
        $kategoriObat->save();
        return redirect()->route("kategori.index")->with('status', 'Kategori Obat Berhasil Terubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriObat  $kategoriObat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriObat $kategoriObat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriObat  $kategoriObat
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriObat $kategoriObat)
    {
        //
    }
}
