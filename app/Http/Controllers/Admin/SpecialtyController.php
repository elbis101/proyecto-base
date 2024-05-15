<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Http\Controllers\Controller;

class SpecialtyController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $specialties=Specialty::all();
        return view('specialties.index', compact('specialties'));
    }

    public function create(){
        return view('specialties.create');
    }


     private function performValidation(Request $request){
        $rules=[
            'name'=>'required|min:3'
          
          ];
          $messages=[
           'name'=>'Es necesario ingresar un nombre',
           'name.min'=>'como minimo el nombre debe tener 3 caracteres',
          ];
          $this->validate($request,$rules,$messages);


   }
    public function store(Request $request){
       // dd($request->all());
        $this->performValidation($request);
        $specialty=new Specialty();
        $specialty->name=$request->input('name');
        $specialty->description=$request->input('description');
        $specialty->save();
        $notification='la especialidad se ha registrado correctamente';
        return redirect('/specialties')->with(compact('notification'));
       
    }
    public function edit(Specialty $specialty){

    return view('specialties.edit', compact('specialty'));
}
    public function update(Request $request, Specialty $specialty){
        // dd($request->all());
        $this->performValidation($request);
        
         $specialty->name=$request->input('name');
         $specialty->description=$request->input('description');
         $specialty->save();
         $notification='la especialidad se ha actualizado correctamente';
         return redirect('/specialties')->with(compact('notification'));
     }
     public function destroy(Specialty $specialty){
        $deletedSpecialty=$specialty->name;
        $specialty->delete();
        $notification='la especialidad ' . $deletedSpecialty . ' se ha eliminado correctamente';
        return redirect('/specialties')->with(compact('notification'));
     }


}
