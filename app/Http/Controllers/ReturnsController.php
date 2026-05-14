<?php

namespace App\Http\Controllers;

use App\Models\Returns;

use Illuminate\Http\Request;

class ReturnsController extends Controller
{
    public function index()
    {
        $returns = Returns::all();
        return view('admin.returns.index', compact('returns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'borrowing_id' => 'required|integer',
            'return_date' => 'required|date',
            'late_days' => 'required|integer|min:0'
        ]);

        Returns::create([
            'borrowing_id' => $request->borrowing_id,
            'return_date' => $request->return_date,
            'late_days' => $request->late_days
        ]);

        return redirect('/admin/returns')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'borrowing_id' => 'required|integer',
            'return_date' => 'required|date',
            'late_days' => 'required|integer|min:0'
        ]);

        $return = Returns::find($id);

        $return->update([
            'borrowing_id' => $request->borrowing_id,
            'return_date' => $request->return_date,
            'late_days' => $request->late_days
        ]);

        return redirect('/admin/returns')->with('success', 'Data berhasil diupdate');;
    }

    public function destroy($id)
    {
        $return = Returns::find($id);
        $return->delete();

        return redirect('/admin/returns')->with('success', 'Data berhasil ditambahkan');
    }
}
