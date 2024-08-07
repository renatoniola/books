<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $author_name
 * @property string $author_lastname
 * @property string $author_image_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $author_slug
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Book> $book
 * @property-read int|null $book_count
 * @method static \Database\Factories\AuthorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author query()
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereAuthorImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereAuthorLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereAuthorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereAuthorSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereUpdatedAt($value)
 */
	class Author extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $book_title
 * @property string|null $book_descr
 * @property string|null $book_excerpt
 * @property int $author_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $book_image_path
 * @property int $book_year_published
 * @property string $book_slug
 * @property-read \App\Models\Author|null $author
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Book> $myBooks
 * @property-read int|null $my_books_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\BookFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookDescr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookYearPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BookStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookStatus whereUpdatedAt($value)
 */
	class BookStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $book_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $book_status
 * @property-read \App\Models\BookStatus|null $statuss
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser whereBookStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookUser whereUserId($value)
 */
	class BookUser extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $role_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Author> $myAuthors
 * @property-read int|null $my_authors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Book> $myBooks
 * @property-read int|null $my_books_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $author_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthor whereUserId($value)
 */
	class UserAuthor extends \Eloquent {}
}

