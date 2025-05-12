<?php

namespace App\Http\Controllers;
use App\Models\Review;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    //

    public function store(Request $request, $bookId){
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $validated['book_id'] = $bookId;

        Review::create($validated);

        return redirect()->route('books.show', $bookId);
    }
}
