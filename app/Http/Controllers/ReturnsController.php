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
        Returns::create([
            'borrowing_id' => $request->borrowing_id,
            'return_date' => $request->return_date,
            'late_date' => $request->late_date
        ]);

        return redirect('/admin/returns');
    }

    public function update (Request $request, $id)
    {
        $return = Returns::find($id);

        $return->update([
            'borrowing_id' => $request->borrowing_id,
            'return_date' => $request->return_date,
            'late_days' => $request->late_days
        ]);

        return redirect('/admin/returns');
    }

    public function destroy($id)
    {
        $return = Returns::find($id);
        $return->delete();

        return redirect('/admin/returns');
    }
}
