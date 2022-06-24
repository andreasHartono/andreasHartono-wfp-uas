<?php

namespace App\Http\Controllers;

use App\Nota;
use App\NotaDetail;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nota::all();
        return view('admin.report.reportactivity', compact('data'));
    }

    public function checkout(Request $request){
        $cart = Session()->get('cart');
        $total = $request['total'];

        $nota = new Nota();
        $nota->total_harga = $total;
        $nota->user_id = auth()->user()->id;
        $nota->save();
        
        $notaId = $nota->id;
        foreach ($cart as $c) { 
            $notaDetail = new NotaDetail();
            $notaDetail['kuantitas'] = $c['quantity'];
            $notaDetail['nota_id'] = $notaId;
            $notaDetail['obat_id'] = $c['id'];

            $notaDetail->save();
        }

        session()->forget('cart');
        $request->session()->forget('cart'); 
        return redirect('/');
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
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
