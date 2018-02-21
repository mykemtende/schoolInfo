<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Level;

class LevelController extends Controller
{

    public function index()
    {
        

        $levels = Level::all();
        return view('levels.index', compact('levels'));

    }

    public function create()
    {
 
        return view('levels.create');
    }

    public function store()
    {
    
        Level::create(request(['name']));

        return redirect('/levels');
    }

    public function show(Level $level)
    {
    
    }

    public function edit(Level $level)
    {
        
        return view('levels.edit', compact('level'));
    }

    public function update(Level $level)
    {
        
        $input = request(['name']);

        $level->fill($input)->save();

        return redirect('/levels');
    }

    public function destroy(Level $level)
    {
     
        $level->delete();

        return redirect('/levels');


    }
}
