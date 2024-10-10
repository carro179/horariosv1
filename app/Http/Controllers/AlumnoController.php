<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public $val;

    public function __construct(){
        $this->val = [
            'nombre'=>'required',
            'apellido'=>'required',
            'email'=>'required'
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(5);
        //return view("alumnos.index", ['alumnos'=>$alumnos]);
        return view("alumnos/index", compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::paginate(5);
        //return view("alumnos.index", ['alumnos'=>$alumnos]);
        $alumnos=Alumno::Paginate(5);
        $alumno=new Alumno;
        $txtbtn="Guardar";
        $accion='C';
        $des = "";
        return view("alumnos/frm", compact("alumnos","alumno", "accion", "txtbtn", 'des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val= $request->validate($this->val);
        Alumno::create($request->all());
        return redirect()->route("alumnos.index")->with("mensaje", "Se insertó correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        $accion="D";
        $des = "disabled";
        $txtbtn="Confirmar Eliminación";
        return view("alumnos.show", compact('alumnos', 'alumno', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $txtbtn="Actualizar";
        $accion='E';
        $des = "";
        $alumnos=Alumno::paginate(5);
        return view("alumnos.frm", compact("alumnos",'alumno', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $val= $request->validate($this->val);
        $alumno->update($val);
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
