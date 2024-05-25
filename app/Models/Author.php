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
        'author_image_path'

    ];
   


    public function getRouteKeyName()
    {
        return 'author_slug';
    }

    
    protected $appends = ['fullname'];
    public function getFullName()
    {
       return "$this->author_name $this->author_lastname";
    }

    public function book(): HasMany
    {
        return $this->HasMany(Book::class);
    }
}
