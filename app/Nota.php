<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function user(){
        return $this->belongsTo("App\User","user_id");
    }

    public function nota_detail(){
        return $this->hasMany(NotaDetail::class);
    }
}
