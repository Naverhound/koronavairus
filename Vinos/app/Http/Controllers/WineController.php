<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class WineController extends Controller
{
   public function index()
   {
       # code...
       return view('admin')
       ->with('prueba','francois'); 
   }

public function store(Request $request)
{
    # code...
    $validator= Validator::make($request->all(),[//start validating everything that the request is receiving
        //left key, must be named as the "name" atribute of the inputs included in the request
        'name'=>'required|min:3|max:25',
        'cost'=>'required|digits_between:3,9',
        'reference'=>'required|min:3|max:10',
        'region'=>'required|min:5|max:40',
        'brand'=>'required|min:3|max:25',
        'color'=>'required|min:7|max:15',
        'age'=>'required|min:7|max:20',
        'sugar'=>'required|min:5|max:20',
        'alevel'=>'required|digits_between:1,3',
        'img'=>'required'//TODO: resolver imágenes que no puedo validar ni por mimes
    ]);
    //dd($request);
    if($validator->fails()){        
        dd('campos llenados incorrectamente en wines');//lline that prints in a new page
    }else{
        dd('done, mi chavo (hecho, si eres peña) en wines');//lline that prints in a new page
    }
}
}
