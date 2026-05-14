<?php

namespace App\Http\Controllers;

use App\Models\Authors;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index ()
    {
        $authors = Authors::all();
        return view('admin.authors.index', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50'
        ]);

        Authors::create([
            'name' => $request->name
        ]);

        return redirect('/admin/authors')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50'
        ]);

        $author = Authors::find($id);

        $author->update([
            'name' => $request->name
        ]);

        return redirect('/admin/authors')->with('success', 'Data berhasil diupdate');
    }


    public function destroy($id)
    {
        $author = Authors::find($id);
        $author->delete();

        return redirect('/admin/authors')->with('success', 'Data berhasil dihapus');
    }

}
