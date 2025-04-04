<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //comment model

    use HasFactory;
    // protected $fillable = ['articleId', 'comment', 'timestamp'];
    protected $fillable = ['articleId', 'comment', 'timestamp'];
}

