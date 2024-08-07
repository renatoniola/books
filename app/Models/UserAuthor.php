<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'user_id',
    ];
    protected $table = 'user_author';

    public static function toggleAuthorUserLike($authorId): bool
    {

        $userAuthor = UserAuthor::where('user_id', Auth::user()->id)->where('author_id', $authorId)->first();
        if ($userAuthor !== null) {
            $userAuthor->delete();
            return false;
        } else {
            $data = [
                'user_id' => Auth::user()->id,
                'author_id' => $authorId,
            ];
            UserAuthor::create($data);
        }
        return true;
    }
}
