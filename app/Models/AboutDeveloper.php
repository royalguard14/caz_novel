<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDeveloper extends Model
{
   

 protected $table = 'aboutus_developer';

    protected $fillable = [

'image',
'name',
'position',
'socmed'
    ];

}
