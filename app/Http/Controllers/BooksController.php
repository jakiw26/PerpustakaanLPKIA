<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\books;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('admin.books.index', compact('books'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'category_id' => 'required|integer',
            'author_id' => 'required|integer',
            'publisher_id' => 'required|integer',
            'title' => 'required|string|max:50',
            'isbn' => 'required|string|max:50',
            'year' => 'required|integer|digits:4|min:1901|max:2155',
            'stock' => 'required|integer',
            'description' => 'required|string|max:50',
        ]);

        Books::create([
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
            'publisher_id' => $request->publisher_id,
            'title' => $request->title,
            'isbn' => $request->isbn,
            'year' => $request->year,
            'stock' => $request->stock,
            'description' => $request->description
        ]);

        return redirect('/admin/books')->with('success', 'Data berhasil ditambahkan');
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'category_id' => 'required|integer',
            'author_id' => 'required|integer',
            'publisher_id' => 'required|integer',
            'title' => 'required|string|max:50',
            'isbn' => 'required|string|max:50',
            'year' => 'required|integer|digits:4|min:1901|max:2155',
            'stock' => 'required|integer',
            'description' => 'required|string|max:50',
        ]);

        $books = Books::find($id);

        $books->update([
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
            'publisher_id' => $request->publisher_id,
            'title' => $request->title,
            'isbn' => $request->isbn,
            'year' => $request->year,
            'stock' => $request->stock,
            'description' => $request->description
        ]);

        return redirect('/admin/books')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $books = Books::find($id);
        $books->delete();

        return redirect('/admin/books')->with('success', 'Data berhasil dihapus');
    }
}
