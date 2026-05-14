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
        Authors::create([
            'name' => $request->name
        ]);

        return redirect('/admin/authors');
    }

    public function update(Request $request, $id)
    {
        $author = Authors::find($id);

        $author->update([
            'name' => $request->name
        ]);

        return redirect('/admin/authors');
    }

    public function destroy($id)
    {
        $author = Authors::find($id);
        $author->delete();

        return redirect('/admin/authors');
    }

}
