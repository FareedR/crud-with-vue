<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function indexBook()
    {
        $books = Book::all()->toArray();
        return array_reverse($books);
    }

    public function storeBook(Request $request)
    {
        $book = new Book([
            'name' => $request->get('name'),
            'author' => $request->get('author')
        ]);
        $book->save();
        return response()->json([
            'message' => 'The book successfully added'
        ],201);
    }

    public function editBook($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    public function updateBook(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json([
            'message' => 'Successfully updated'
        ],200);
    }

    public function deleteBook($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json([
            'message' => 'Successfully deleted'
        ],200);
    }
}

