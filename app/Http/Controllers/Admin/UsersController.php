<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('admin.pages.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.pages.users.add');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Bcrypt($request->input('password')),
            'utype' => $request->input('utype'),
        ]);
        session()->flash('add');
        return redirect()->route('admin.users.index')->with('success', 'User Added Successfully');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
