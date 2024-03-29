<?php

namespace App\Http\Controllers;

use App\models\Author;

class AuthorController extends Controller
{
    public function authors() {
        
        return view('authors', [
            'authors' => Author::paginate(10),
            'title' => 'Authors'
        ]);
    }

    public function author($id) {
        
        return view('author', [
            'author' => Author::find($id)
        ]);
    }
}
