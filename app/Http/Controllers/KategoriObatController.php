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
        $result = KategoriObat::all();
        dd($result);
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
    public function edit(KategoriObat $kategoriObat)
    {
        //
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
