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
        Categories::create([
            'name' => $request->name
        ]); 

        return redirect('/admin/categories');
    }

    public function update (Request $request, $id)
    {
        $categories = Categories::find($id);

        $categories->update([
            'name' => $request->name
        ]);      
        return redirect('/admin/categories');

    }

    public function destroy ($id)
    {
        $categories = Categories::find($id);
        $categories->delete();

        return redirect('/admin/categories');
    }
}
