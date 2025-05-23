<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainingcenter;

class TrainingcenterController extends Controller
{
          public function index(){

        $trainingcenters = Trainingcenter::all();

        return view('trainingcenter.index', compact('trainingcenters'));

    }

    public function create() {
        
        return view('trainingcenter.create');

    }

    public function store(Request $request){

        $trainingcenters = new Trainingcenter();

        $trainingcenters ->name=$request->name;
        $trainingcenters->location = $request->location;
      
        $trainingcenters ->save();
        
        return Redirect()-> route('trainingcenter.index');

    }
}
