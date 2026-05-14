<?php

namespace App\Http\Controllers;

use App\Models\members;

use Illuminate\Http\Request;

class MembersController extends Controller
{
     public function index()
    {
        $members = members::all();
        return view('admin.member.index', compact('members'));
    }  

    public function store(Request $request)
    { 
        members::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'phone' => $request->phone,
            'address'=> $request->address
        ]);

        return redirect('/admin/members');
    }
    public function update(Request $request, $id)
    {
        $members = members::find($id);

        $members->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'phone' => $request->phone,
            'address'=> $request->address
        ]);

        return redirect('/admin/members');
    }

    public function delete($id)
    {
        $members = members::find($id);
        $members->delete();

        return redirect('/admin/members');
    }
}
