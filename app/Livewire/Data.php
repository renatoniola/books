<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class Data extends Component
{
    public int $booksCount = 0;
    public int $usersCount = 0;
    public int $authorsCount = 0;
    public int $myBooksCount = 0;
    public int $myAuthorsCount = 0;

    public function render(): View
    {

        $this->booksCount = Cache::remember(
            "dashboard.data.books.count",
            5,
            function () {
                return Book::count();
            }
        );

        $this->usersCount = Cache::remember(
            "dashboard.data.users.count",
            3600,
            function () {
                return User::count();
            }
        );

        $this->authorsCount = Cache::remember(
            "dashboard.data.authors.count",
            3600,
            function () {
                return Author::count();
            }
        );

        if (Auth::user()) {
            $this->myAuthorsCount = Cache::remember(
                "dashboard.data.myauthors.count",
                5,
                function () {
                    return Auth::user()->myAuthors()->count();
                }
            );

            $this->myBooksCount = Cache::remember(
                "dashboard.data.mybooks.count",
                5,
                function () {
                    return Auth::user()->myBooks()->count();
                }
            );
        }

        return view(
            'livewire.components.data',
            [
                'booksCount' => $this->booksCount,
                'myBooksCount' => $this->myBooksCount,
                'usersCount' => $this->usersCount,
                'authorsCount' => $this->authorsCount,
                'myAuthorsCount' => $this->myAuthorsCount,
            ]
        );
    }
}
