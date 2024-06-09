<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'user_id',
    ];
    protected $table = 'user_author';
}
