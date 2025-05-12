<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Models\User;


class bookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id){
        $book = Book::with('reviews.users')->findOrFail($id);
        $users = User::all();

        return view('books.show', compact('book', 'users'));
    }
}
