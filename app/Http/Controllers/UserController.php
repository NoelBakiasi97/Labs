<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('backoffice.users.usersIndex', compact('users', 'roles'));
    }


    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        return view('backoffice.users.editUsers', compact('users', 'roles'));
    }

  
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description'=>'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role_id'=>'required',
            'img' =>'sometimes|required'
        ]);
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->description=$request->description;
        $users->email = $request->input('email');
        $users->role_id = $request->input('role_id');
        if($request->hasFile('img')){
            Storage::disk('public')->delete($users->img);
            $newImg=Storage::disk('public')->put('', $request->img);
            $users->img=$newImg;
        }
        $users->save();
        return redirect()->route('users');
    }

    public function destroy($id){
        $users = User::find($id);
        Storage::disk('public')->delete($users->img);
        $users->delete();
        return redirect()->route('users');
    }

}
