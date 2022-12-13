<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
// use App\Http\Requests\BookRequest;
// use App\Mail\BookEdit;
// use App\Mail\Test; 
// use Barryvdh\Debugbar\Facade as Debugbar;
// use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    // function index(Request $request)
    function index()
    {
        $books = Book::all();
        $books = Book::query()->orderBy('id', 'DESC')->get();
        return view('books.list', ['books' => $books]);
    }

    function create()
    {
        return view('books.create');
    }

    function add(BookRequest $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();
        return redirect()->route('books');
    }  

    public function edit(Book $book)
    {
        //     // Mail::to(\Auth::user())->send(new BookEdit(['book' => $book]));
        return view('books.edit', ['book' => $book]);
    }

    public function save(BookRequest $request)
    {
        $book = Book::query()->find($request->id);

        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();
        return redirect()->route('books');
    }

    public function delete(BookRequest $request)
    {
        Book::destroy($request->id);
        return redirect()->route('books');
    }
}
