<?php

namespace App\Http\Controllers;

use App\KategoriObat;
use App\Obat;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return view('layouts.app');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home(){
    
        $category = KategoriObat::all();
        $obat = Obat::all();
        return view('frontend.product', compact('category','obat'));
    }

    public function search(Request $request){
        $category = KategoriObat::all();
        $obat = Obat::where("nama", "like", "%" . $request['search'] . "%")->where("kategoriobat_id", "like", "%" . $request['kategori'] . "%")->get();
        return view('frontend.product', compact('category','obat'));
    }
}
