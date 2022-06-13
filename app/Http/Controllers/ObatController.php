<?php

namespace App\Http\Controllers;

use App\Nota;
use App\NotaDetail;
use App\Obat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
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
    * @param  \App\Obat  $obat
    * @return \Illuminate\Http\Response
    */
   public function show(Obat $obat)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Obat  $obat
    * @return \Illuminate\Http\Response
    */
   public function edit(Obat $obat)
   {
      //
   }

   public function showData()
   {
      //$dataObat = NotaDetail::select(DB::raw("obats.nama as nama, SUM(kuantitas) AS total"))->join("obats","nota_details.obat_id","=","obats.id")->groupBy("obat_id")->orderBy("total","DESC")->take(5)->get();
      $dataPembeli = Nota::select(DB::raw("users.id as id, users.nama as nama, notas.created_at as created_at, SUM(notas.total_harga) as jumlah"))->join('users', 'notas.user_id', '=', 'users.id')->groupBy("user_id")->orderBy("jumlah", "DESC")->take(3)->get();
      return view('admin.report.reportcustomer', compact('dataPembeli'));
      //dd($dataPembeli);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Obat  $obat
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Obat $obat)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Obat  $obat
    * @return \Illuminate\Http\Response
    */
   public function destroy(Obat $obat)
   {
      //
   }
}