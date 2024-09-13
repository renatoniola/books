<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'author_lastname',
        'author_image_path',
        'author_slug',
        'author_descr',
        'author_excerpt',

    ];

    public function getRouteKeyName(): string
    {
        return 'author_slug';
    }

    public function getFullName(): string
    {
        return "$this->author_name $this->author_lastname";
    }

    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
