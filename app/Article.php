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

    public function path()
    {
        return route('articles.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
