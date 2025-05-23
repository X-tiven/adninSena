<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use Illuminate\Support\Facades\Redirect;

class AreaController extends Controller
{
      public function index(){

        $areas = Area::all();

        return view('area.index', compact('areas'));

    }

    public function create() {
        
        return view('area.create');

    }

    public function store(Request $request){

        $areas = new Area();

        $areas ->name=$request->name;
      
        $areas ->save();
        
        return Redirect()-> route('area.index');

    }
}
