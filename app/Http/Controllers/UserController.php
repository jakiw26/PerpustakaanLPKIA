<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $User = User::all();
        return view('admin.User', compact('User'));
    }  

    public function store(Request $request)
    { 
        User::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/User');
    }
    public function update(Request $request, $id)
    {
        $User = User::find($id);

        $User->update([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/User');
    }

    public function delete($id)
    {
        $User = User::find($id);
        $User->delete();

        return redirect('/User');
    }
}
