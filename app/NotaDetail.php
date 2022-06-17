<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaDetail extends Model
{
    public function nota(){
        return $this->belongsTo("App\Nota","nota_id");
    }

    public function obat(){
        return $this->belongsTo("App\Obat","obat_id");
    }
}
