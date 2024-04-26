<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\models\BookStatus;

class BookUser extends Model
{
    use HasFactory;
    protected $table="book_user";

    protected $fillable = [
        'book_status',
    ];

    public function statuss(): BelongsTo
    {
        return $this->belongsTo(BookStatus::class);
    }

}
