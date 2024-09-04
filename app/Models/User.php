<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function myBooks(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_user', 'user_id', 'book_id')->withPivot('book_status');
    }

    public function myAuthors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'user_author', 'user_id', 'author_id');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'user_author')->withTimestamps();
    }

    public function hasLiked($author)
    {
        return $this->likes()->where('author_id', $author->id)->exists();
    }

    public function isAdmin(): bool
    {
        return $this->role()->where('id', 1)->exists();
    }
}
