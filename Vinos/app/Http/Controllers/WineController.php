<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Wine;
use App\Specification;
use App\Http\Requests\WineRequest;
class WineController extends Controller
{
   public function index(){
   
       # code...
       return view('admin')
       ->with('prueba','francois')
       ->with('Wines',Wine::all()); 
   }

public function edit(Wine $wine){
    if(request()->wantsJson()){
    
        return["wine"=>$wine->load('specifications'),//this line is gonna load all the wine data also with specifications
                "route"=>route('admin.wine.update',$wine)//retreive a route interpretated by laravel with the $wine object
                ];
    }

}
public function store(WineRequest $request){
   //dd($request);
    # code...
    $data=$request->validated();
  
    /*if ($data->file('img')->isValid()) {
        return $data->img->extension();
        
    }else{
        return $data;
    }*/
        try {
            //code...
            //dd($data);
           
            $wine= Wine::create([
            'name'=>$data['name'],//izquierda hace referencia al nombre del Modelo (en el modelo se llama igual que en la BD) y la derecha es el nombre que tiene en el "name" del formulario
            'reference'=>$data['reference'],
            'cost'=>$data['cost'],
            'slug'=>Str::finish(Str::slug($data['name'], '_'),'_wine')
        ]);

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('Retorno','Errores en wines: \n'.$th);
        }
        //si lo anterior slió bien, nuevamente se abre try catch
        try {
            //code...
            $specification= Specification::create([
                'wine_id'=>$wine['id'],
                'region'=>$data['region'],
                'brand'=>$data['brand'],
                'color'=>$data['color'],
                'age'=>$data['age'],
                'sugar'=>$data['sugar'],
                'alevel'=>$data['alevel'],
                'img'=>'default.jpg'
                ]);
        } catch (\Throwable $th) {
            //throw $th;
            //si falla algo, primero se revierten los cambios de wines y luego mando los errores
            $wine->delete();
            return back()->with('Retorno','Errores en specification: \n'.$th);
        }
  
    return back()->with('Listo','Se insertó en todos lados');
    //return back()->with('Listo',Str::finish(Str::slug($data->name, '_'),'_wine')) ;

}

public function destroy(Wine $wine){
    $wine->delete();
    Specification::where("wine_id",$wine->id)->delete();
    return back()->with('Eliminado','Se Eliminó el registro adecuadamente');
}
public function update(WineRequest $request, Wine $wine){
       $wine->update([
        'name'=>$request['name'],//izquierda hace referencia al nombre del Modelo (en el modelo se llama igual que en la BD) y la derecha es el nombre que tiene en el "name" del formulario
        'reference'=>$request['reference'],
        'cost'=>$request['cost'],
        'slug'=>Str::finish(Str::slug($request['name'], '_'),'_wine')
       ]);
     //si lo anterior slió bien, se abre try catch
     try {
        //code...
        $specification=Specification::where("wine_id",$wine->id);
        $specification->update([
            'region'=>$request['region'],
            'brand'=>$request['brand'],
            'color'=>$request['color'],
            'age'=>$request['age'],
            'sugar'=>$request['sugar'],
            'alevel'=>$request['alevel'],
            'img'=>'default.jpg'
            ]);
            
    } catch (\Throwable $th) {
        //throw $th;
        //si falla algo, primero se revierten los cambios de wines y luego mando los errores
        $wine->update([
            'name'=>$wine->name,//izquierda hace referencia al nombre del Modelo (en el modelo se llama igual que en la BD) y la derecha es el nombre que tiene en el "name" del formulario
            'reference'=>$wine->reference,
            'cost'=>$wine->cost,
            'slug'=>Str::finish(Str::slug($wine->name, '_'),'_wine')
           ]);
        return back()->with('Retorno','Errores en specification: \n'.$th);
    }
    return back()->with('Listo','Datos Updateados correctamente');
    }

public function show($id){}

}
