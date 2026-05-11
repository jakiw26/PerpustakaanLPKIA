<?php

namespace App\Http\Controllers;

use App\Models\Borrowings;

use Illuminate\Http\Request;

class BorrowingsController extends Controller
{
    public function index()
    {
        $borrowings = Borrowings::all();

        return view('admin.borrowings', compact('borrowings'));
    }

    public function store(Request $request)
    {
        Borrowings::create([
            'member_id' => $request->member_id,
            'user_id' => $request->user_id,
            'borrow_date' => $request->borrow_date,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect('/borrowings');
    }

    public function update(Request $request, $id)
    {
        $borrowing = Borrowings::find($id);

        $borrowing->update([
            'member_id' => $request->member_id,
            'user_id' => $request->user_id,
            'borrow_date' => $request->borrow_date,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect('/borrowings');
    }

    public function destroy($id)
    {
        $borrowing = Borrowings::find($id);
        $borrowing->delete();

        return redirect('/borrowings');
    }
}
