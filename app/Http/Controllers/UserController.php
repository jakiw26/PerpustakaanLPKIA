<?php

namespace App\Http\Controllers;

use App\Models\Users;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = Users::all();
        return view('admin.User', compact('Users'));
    }  

    public function store(Request $request)
    { 
        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password'=> $request->password
        ]);

        return redirect('/User');
    }
    public function update(Request $request, $id)
    {
        $User = Users::find($id);

        $User->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password'=> $request->password
        ]);

        return redirect('/User');
    }

    public function delete($id)
    {
        $User = Users::find($id);
        $User->delete();

        return redirect('/User');
    }
}
