<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainingcenter;

class TrainingcenterController extends Controller
{
          public function index(){

        $trainingcenter = Trainingcenter::all();

        return view('trainingcenter.index', compact('trainingcenter'));

    }

    public function create() {
        
        return view('trainingcenter.create');

    }

    public function store(Request $request){

        $trainingcenter = new Trainingcenter();

        $trainingcenter ->name=$request->name;
        $trainingcenter->location = $request->location;
      
        $trainingcenter ->save();
        
        return Redirect()-> route('trainingcenter.index');

    }

    public function show($id){

        $trainingcenter = Trainingcenter::find($id);
       
        return view('trainingcenter.show', compact('trainingcenter'));
    }

    public function destroy (Trainingcenter $trainingcenter){
        
        $trainingcenter->delete();

        return redirect()->route('trainingcenter.index');
    }

     public function edit(Trainingcenter $trainingcenter){

        return view('trainingcenter.edit',compact('trainingcenter'));

      }

    public function update(Request $request, Trainingcenter $trainingcenter){

        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        $trainingcenter->save();
    
        return redirect()->route('trainingcenter.index');

      }
}
