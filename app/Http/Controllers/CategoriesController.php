<?php

namespace App\Http\Controllers;

use App\Models\Categories;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index ()
    {
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50'
        ]);

        Categories::create([
            'name' => $request->name
        ]); 

        return redirect('/admin/categories')->with('success', 'Data berhasil ditambahkan');
    }

    public function update (Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50'
        ]);
        
        $categories = Categories::find($id);

        $categories->update([
            'name' => $request->name
        ]);      
        return redirect('/admin/categories')->with('success', 'Data berhasil diupdate');

    }


    public function destroy ($id)
    {
        $categories = Categories::find($id);
        $categories->delete();

        return redirect('/admin/categories')->with('success', 'Data berhasil dihapus');
    }
}
