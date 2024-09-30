<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * UserAuthor Model.
 */
class UserAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'user_id',
    ];
    protected $table = 'user_author';

    /**
     * Toggle author user like.
     * @param int $authorId
     * @return bool
     */
    public static function toggleAuthorUserLike(int $authorId): bool
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
