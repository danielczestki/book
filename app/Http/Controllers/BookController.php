<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * @return Book[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * @param Request $request
     * @return bool[]
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->get('title');
        $book->author = $request->get('author');
        $book->category = $request->get('category');
        $book->save();

        return [
            'created' => true,
        ];
    }

    /**
     * @param Book $book
     * @return Book
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * @param Request $request
     * @param Book $book
     * @return bool[]
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->get('title');
        $book->author = $request->get('author');
        $book->category = $request->get('category');

        $book->save();

        return [
            'saved' => true,
        ];
    }

    /**
     * @param Book $book
     * @return bool[]
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return [
            'deleted' => true,
        ];
    }
}
