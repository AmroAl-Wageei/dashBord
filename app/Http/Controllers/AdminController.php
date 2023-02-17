<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUser()
    {

        $data = user::all();
        return view('admin.users', compact("data"));
    }
    public function deleteUser($id)
    {

        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function createUser()
    {
        return view('admin.createuser');
    }
    public function StoreUser(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('admin.users')->with('flash_message' , 'User Addedd!');
    }
}