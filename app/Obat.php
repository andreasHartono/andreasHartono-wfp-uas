<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function kategori(){
        return $this->belongsTo('App\Kategori','kategoriobat_id');
    }
}
