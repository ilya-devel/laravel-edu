<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getForm()
    {
        return view('addBook');
    }
    public function addBook(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|min:5|max:100',
            'title' => 'required|min:3|max:255|unique:books,title',
            'genre' => 'required'
        ]);



        $book = new Book($request->all());
        $book->genre = serialize($book->genre);
        $book->save();
        return redirect(route('homePage'));
    }

    public function removeBook($id)
    {
        Book::where('id', '=', $id)->first()->delete();
        return redirect(route('homePage'));
    }
}
