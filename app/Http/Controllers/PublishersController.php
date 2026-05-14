<?php

namespace App\Http\Controllers;

use App\Models\Publishers;

use Illuminate\Http\Request;

class PublishersController extends Controller
{
    
    public function index()
    {
        $publishers = Publishers::all();
        return view('admin.publishers.index', compact('publishers'));
    }

    public function store (Request $request)
    {
        Publishers::create([
            'name' => $request->name,
            'address' => $request->address
        ]);

        return redirect('/admin/publishers')->with('success', 'Data berhasil ditambahkan');
    }

    public function update (Request $request, $id)
    {
        $publisher = Publishers::find($id);

        $publisher->update([
            'name' => $request->name,
            'address' => $request->address
        ]);

        return redirect('/admin/publishers')->with('success', 'Data berhasil diupdate');
    }

    public function destroy ($id)
    {
        $publisher = Publishers::find($id);
        $publisher->delete();

        return redirect('/admin/publishers')->with('success', 'Data berhasil dihapus');
    }
}
