<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.pages.admins.index', compact('admins'));

    }

    public function create()
    {
        return view('admin.pages.admins.add');
    }

    public function store(Request $request)
    {
        Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Bcrypt($request->input('password')),
        ]);
        session()->flash('add');
        return redirect()->route('admin.admins.index')->with('Success', 'Admin Added Successfully');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Bcrypt($request->input('password')),
        ]);
        session()->flash('update');
        return redirect()->route('admin.admins.index')->with('Success', 'Admin Updated Successfully');
    }

    public function destroy($id)
    {
    }
}
