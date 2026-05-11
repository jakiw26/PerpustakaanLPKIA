<?php

namespace App\Http\Controllers;

use App\Models\BorrowingsDetails;
use Illuminate\Http\Request;

class BorrowingsDetailsController extends Controller
{
    public function index()
    {
        $borrowings = BorrowingsDetails::all();

        return view('admin.borrowingsdetails', compact('borrowings'));
    }

    public function store(Request $request)
    {
        BorrowingsDetails::create([
            'borrowing_id' => $request->borrowing_id,
            'book_id' => $request->book_id,
            'qty' => $request->qty,
        ]);

        return redirect('/borrowingsdetails');
    }

    public function update(Request $request, $id)
    {
        $borrowing = BorrowingsDetails::find($id);

        $borrowing->update([
            'borrowing_id' => $request->borrowing_id,
            'book_id' => $request->book_id,
            'qty' => $request->qty,
        ]);

        return redirect('/borrowingsdetails');
    }

    public function destroy($id)
    {
        $borrowing = BorrowingsDetails::find($id);
        $borrowing->delete();

        return redirect('/borrowingsdetails');
    }
}   