<?php

namespace App\Http\Controllers;

use App\Models\Borrowings;

use Illuminate\Http\Request;

class BorrowingsController extends Controller
{
    public function index()
    {
        $borrowings = Borrowings::all();

        return view('admin.borrowings.index', compact('borrowings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|integer',
            'user_id' => 'required|integer',
            'borrow_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:borrow_date',
            'status' => 'required|string|max:50',
        ]);

        Borrowings::create([
            'member_id' => $request->member_id,
            'user_id' => $request->user_id,
            'borrow_date' => $request->borrow_date,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect('/admin/borrowings') ->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'member_id' => 'required|integer',
            'user_id' => 'required|integer',
            'borrow_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:borrow_date',
            'status' => 'required|string|max:50',
        ]);

        $borrowing = Borrowings::find($id);

        $borrowing->update([
            'member_id' => $request->member_id,
            'user_id' => $request->user_id,
            'borrow_date' => $request->borrow_date,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect('/admin/borrowings') ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $borrowing = Borrowings::find($id);
        $borrowing->delete();

        return redirect('/admin/borrowings')->with('success', 'Data berhasil dihapus');
    }
}
