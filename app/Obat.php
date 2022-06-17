<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function kategori(){
        return $this->belongsTo('App\KategoriObat','kategoriobat_id');
    }

    public function nota_detail(){
        return $this->hasMany(NotaDetail::class);
    }
}
