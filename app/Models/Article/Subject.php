<?php

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'slug'];

    public function article(){
        return $this->hasMany(Article::class);
    }
}
