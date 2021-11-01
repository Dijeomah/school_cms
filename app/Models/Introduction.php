<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    use HasFactory;

    protected $fillable = [
        'intro_title',
        'intro_msg' ,
        'intro_img' ,
    ];
}
