<?php

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'user_id', 'subject_id'];

    protected $with = ['subject', 'user'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function getRouteKey()
    {
        return 'slug';
    }
}
