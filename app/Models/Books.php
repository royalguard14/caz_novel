<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{


protected $table = 'book_lists';

    protected $fillable = [
                   
'genre_id',
'code',
'title',
'author',
'desc',
'cover',
'path',
'uploader',
'hashtag'
    ];


    public function genre(){

        return $this->hasOne('App\Models\Genre','id','genre_id');
    }
}
