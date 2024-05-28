<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_title',
        'book_descr',
        'book_excerpt',
        'author_id',
        'book_image_path',
        'book_year_published',
        'book_slug'

    ];

    public function getRouteKeyName()
    {
        return 'book_slug';
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function myBooks(): BelongsToMany
    {
        $books = $this->belongsToMany(Book::class, 'book_user')
            ->withPivot(['book_id', 'user_id', 'book_status']);
        if (Auth::user()) {
            $books->where('user_id', '=', Auth::user()->id);
        }
        return $books;
    }
}
