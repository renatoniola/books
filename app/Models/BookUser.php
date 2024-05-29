<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BookStatus;

class BookUser extends Model
{
    use HasFactory;
    protected $table = "book_user";

    protected $fillable = [
        'book_status',
        'book_id',
        'user_id'
    ];

    public function statuss(): BelongsTo
    {
        return $this->belongsTo(BookStatus::class);
    }

}
