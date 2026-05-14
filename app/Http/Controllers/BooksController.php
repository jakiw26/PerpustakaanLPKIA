<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\books;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('admin.books', compact('books'));
    }  

    public function store(Request $request)
    { 
        Books::create([
            'category_id' => $request->category,
            'author_id' => $request->author,
            'publisher_id' => $request->publisher,
            'title' => $request->title,
            'isbn'=> $request->isbn,
            'year'=> $request->year,
            'stock'=> $request->stock,
            'description'=> $request->description
        ]);

        return redirect('/books');
    }
    public function update(Request $request, $id)
    {
        $books = Books::find($id);

        $books->update([
            'category_id' => $request->category,
            'author_id' => $request->author,
            'publisher_id' => $request->publisher,
            'title' => $request->title,
            'isbn'=> $request->isbn,
            'year'=> $request->year,
            'stock'=> $request->stock,
            'description'=> $request->description
        ]);

        return redirect('/books');
    }

    public function delete($id)
    {
        $books = Books::find($id);
        $books->delete();

        return redirect('/books');
    }
}
