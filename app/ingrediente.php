<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    protected $fillable=[
        'nome',
    ];
    //
    public function Receitas()
    {
     //   return $this->belongsToMany(receita::class);
    }
}
