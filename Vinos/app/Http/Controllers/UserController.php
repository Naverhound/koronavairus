<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class UserController extends Controller
{
    
    public function index()
    {
         # code...
            return view('users')
        ->with('prueba','otro francois');
        
       
        
    }
    public function lol($dato=null)//function for debbuging code and testing crazy ideas
    {
         # code...
        if($dato!=''){//doing sometin when $datno is not null
           return view('users')
        ->with('prueba','dato fue'.$dato);
        }
       return view('users')//default action when $dato wasnt sent
        ->with('prueba','cayo');          
    }

    public function store(Request $request)
    {//the regex in here is for a password that must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character
        # code...
        $validator= Validator::make($request->all(),[//start validating everything that the request is receiving
            //left key, must be named as the "name" atribute of the inputs included in the request
            'name'=>'required|min:3|max:20',
            'email'=>'required|min:11|email',
            'password'=>'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'level'=>'required|min:5',
            'img'=>'required'//TODO: resolver imágenes que no puedo validar ni por mimes
        ]);
        if($validator->fails()){
            dd('campos llenados incorrectamente');//lline that prints in a new page
        }else{
            dd('done, mi chavo (hecho, si eres peña)');//lline that prints in a new page
        }
        
    }
}
