<?php

namespace App\Http\Controllers;

use App\Models\BorrowingsDetails;
use Illuminate\Http\Request;

class BorrowingsDetailsController extends Controller
{
    public function index()
    {
        $borrowings = BorrowingsDetails::all();

        return view('admin.borrowingsdetails.index', compact('borrowings'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'borrowing_id' => 'required|integer',
            'book_id' => 'required|integer',
            'qty' => 'required|integer|min:1',
        ]);

        BorrowingsDetails::create([
            'borrowing_id' => $request->borrowing_id,
            'book_id' => $request->book_id,
            'qty' => $request->qty,
        ]);

        return redirect('/admin/borrowingsdetails')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'borrowing_id' => 'required|integer',
            'book_id' => 'required|integer',
            'qty' => 'required|integer|min:1',
        ]);

        $borrowing = BorrowingsDetails::find($id);

        $borrowing->update([
            'borrowing_id' => $request->borrowing_id,
            'book_id' => $request->book_id,
            'qty' => $request->qty,
        ]);

        return redirect('/admin/borrowingsdetails')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $borrowing = BorrowingsDetails::find($id);
        $borrowing->delete();

        return redirect('/admin/borrowingsdetails')->with('success', 'Data berhasil ditambahkan');
    }
}
