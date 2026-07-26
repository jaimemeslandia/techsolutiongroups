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
        $proyectos = Proyectos::orderBy('created_at', 'desc')->paginate(5);
        return view('proyectos.lista', ['proyectos' => $proyectos]);
    }

    public function proyecto($id){

        $proyecto = Proyectos::findOrFail($id);

        return view('proyectos.proyecto', ["proyecto"=>$proyecto]);
    }

    public function crear(){
        return view('proyectos.crear');
    }

    public function actualizar($id){
        $proyecto = Proyectos::findOrFail($id);
        return view('proyectos.actualizar', ["proyecto"=>$proyecto]);
    }

    public function borrar($id){
        $proyecto = Proyectos::findOrFail($id);
        return view('proyectos.borrar', ["proyecto"=>$proyecto]);
    }

}
