<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
     protected $table = 'postcomment';

    protected $fillable = [
          
        'image',
        'book_id',
        'name',
        'message',
        'message_reply',
        'reply',
        'status'
    ];



}
