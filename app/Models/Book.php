<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_title',
        'book_descr',
        'book_excerpt',
        'author_id',
        'book_image_path',
        'book_year_published'

    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

 
}
