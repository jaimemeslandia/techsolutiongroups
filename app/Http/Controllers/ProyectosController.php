<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function index(){
        return view('proyectos.index');
    }

    public function lista(){
        $proyectos = Proyectos::orderBy('id', 'desc')->paginate(5);
        return view('proyectos.lista', ['proyectos' => $proyectos]);
    }

    public function proyecto($id){

        $proyecto = Proyectos::findOrFail($id);

        return view('proyectos.proyecto', ["proyecto"=>$proyecto]);
    }

    public function crear(){
        #RETORNA LA VISTA EN DONDE SE CREARAN LOS PROYECTOS
        return view('proyectos.crear');
    }

    public function creaProyectos(Request $request){
        #ESTE SI CREA LOS PROYECTOS 
         $validado = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Fecha_de_inicio' => 'required|date',
            'Estado' => 'required|string|max:255',
            'Responsable' => 'required|string|max:255',
            'Monto' => 'required|integer|min:0',
         ]);

         Proyectos::create($validado);

         return redirect()->route('proyectos.lista')->with('success','Proyecto Creado');
    }

    public function actualizar($id){
        $proyecto = Proyectos::findOrFail($id);
        return view('proyectos.actualizar', ["proyecto"=>$proyecto]);
    }

    public function actualizarProyectos(Proyectos $proyecto, Request $request){
        
        $validado = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Fecha_de_inicio' => 'required|date',
            'Estado' => 'required|string|max:255',
            'Responsable' => 'required|string|max:255',
            'Monto' => 'required|integer|min:0',
         ]);
        $proyecto->update($validado);
        return redirect()->route('proyectos.lista', $proyecto->id)->with('success', 'Proyecto Actualizado');
    }

    public function borrar($id){
        $proyecto = Proyectos::findOrFail($id);
        return view('proyectos.borrar', ["proyecto"=>$proyecto]);
    }

    public function borrarProyectos($id){
        $proyecto = Proyectos::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('proyectos.lista')->with('success', 'Proyecto Borrado');
    }

}
