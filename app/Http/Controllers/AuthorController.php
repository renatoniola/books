<?php

namespace App\Http\Controllers;

use App\models\Author;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function authors() {
        
        return view('authors', [
            'authors' => Author::paginate(10),
            'title' => 'Authors'
        ]);
    }

    public function myAuthors()
    {
        
        return view('authors', [
            'authors' => Auth::user()->myAuthors()->paginate(10),
            'title' => 'My authors',
        ]);
    }
}
