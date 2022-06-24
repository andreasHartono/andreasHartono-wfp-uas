<?php

namespace App\Http\Controllers;

use App\KategoriObat;
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

   public function dashboardAdmin()
   {
      $data = Obat::all();
      $kategori = KategoriObat::all();
      return view('admin.data.obat', compact('data', 'kategori'));
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
      $data = new Obat();
      $data->nama = $request->get("nama");
      $data->deskripsi = $request->get("description");
      $data->harga = $request->get("price");
      $data->kategoriobat_id = $request->get("kategori_id");

      if ($request->file('image')) {
         $file = $request->file('image');
         $imgFolder = 'images/obat';
         $imgFile = time() . "_" . $file->getClientOriginalName();
         $file->move($imgFolder, $imgFile);
      } else {
         $imgFile = 'null';
      }

      $data->gambar = $imgFile;

      $data->save();
      return redirect()->route("obat.index")->with('status', 'data obat baru berhasil tersimpan');
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
      dd($dataPembeli);
   }

   public function showObat(){
      $dataObat = NotaDetail::select(DB::raw("obats.nama as nama, SUM(kuantitas) AS total"))->join("obats","nota_details.obat_id","=","obats.id")->groupBy("obat_id")->orderBy("total","DESC")->take(5)->get();
      return view('admin.report.reportobat', compact('dataObat'));
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
      $result = NotaDetail::where("obat_id", "=", $obat['id'])->first();
      if ($result === null) {
         Obat::find($obat['id'])->delete();
         return redirect()->route("obat.index")->with('status', 'data obat berhasil terhapus');
      } else {
         return redirect()->route("obat.index")->with('fail', 'data obat gagal terhapus karena obat sudah dibeli');
      }
   }
}
