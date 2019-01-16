<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receita extends Model
{
    //
    public function Ingredientes()
    {
        return $this->belongsToMany(ingrediente::class);
    }
}
