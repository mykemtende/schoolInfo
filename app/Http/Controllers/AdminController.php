<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{

    public function index()
    {
        
        $admins = Admin::all();
        return view('admins.index', compact('admins'));



    }

    public function create()
    {
        return view('admins.create');
    }

    public function store()
    {

        Admin::create(request(['name','username']));

        return redirect('/admins');
    }

    public function show(Admin $admin)
    {
    
    }

    public function edit(Admin $admin)
    {
        return view('admins.edit');
    }

    public function update(Admin $admin)
    {

        $input = request(['name','username']);

        $admin->fill($input)->save();

        return redirect('/admins');
    }

    
     #Remove the specified resource from storage.

    public function destroy(Admin $admin)
    {
    
        $admin->delete();

        return redirect('/admins');


    }
}
