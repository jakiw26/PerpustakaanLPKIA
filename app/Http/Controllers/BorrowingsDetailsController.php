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
}