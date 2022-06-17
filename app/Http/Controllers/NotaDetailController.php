<?php

namespace App\Http\Controllers;

use App\NotaDetail;
use Illuminate\Http\Request;

class NotaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\NotaDetail  $notaDetail
     * @return \Illuminate\Http\Response
     */
    public function show(NotaDetail $notaDetail)
    {
        //
    }

    public function cari($id){
        $data = NotaDetail::where("nota_id",'=',$id)->get();
        return view('admin.report.reportactivitydetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NotaDetail  $notaDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaDetail $notaDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NotaDetail  $notaDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaDetail $notaDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NotaDetail  $notaDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaDetail $notaDetail)
    {
        //
    }
}
