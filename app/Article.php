<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     /**
    //      * quando vc precisa buscar pelo parametro da rota um campo que nao seja a pk da tabela
    //      **/
    //     return 'field_name'; // Article::where('slug', $article)->first();
    // }
}
