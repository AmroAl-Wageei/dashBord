<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminControllerR extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('admin.users', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();

        // $request->all()

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        return view('admin.users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $user = User::onlyTrashed()->get();
        return view('admin.sofdelete' , compact('user'));
        // return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::findorFail($id);
        return view('admin.edituser', compact('data'));

        //    return $user;

        //    if ($user) {
        //        return $user;
        //    } else {
        //     return response('404 Not Found');
        //    }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data  = User::findorFail($id);
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->password = $request->password;
        // $data->save();

        $data = User::findorFail($id);
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();


        //#1 User::findorFail($id)->delete();
        // return redirect()->route('users.index');
        //#2 User::destroy($id);
        // return redirect()->route('users.index');
    }
}