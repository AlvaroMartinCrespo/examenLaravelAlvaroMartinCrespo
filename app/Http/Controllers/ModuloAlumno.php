<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Modulo;
use App\Models\ModuloAlumno as ModelsModuloAlumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuloAlumno extends Controller
{
    function listarModulos()
    {
        $modulos = Modulo::all();
        return view('inicio', compact(['modulos']));
    }

    function eliminarAlumno($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect(route('inicio'));
    }

    function listarModuloAlumnos($id)
    {

        $idModulo = $id;

        // Obtenemos los alumnos mediante join y el id del modulo que buscamos, y los recogemos todos.
        $alumnos = DB::table('alumnos')
            ->join('modulo_alumnos', 'alumnos.id', '=', 'modulo_alumnos.idAlumno')
            ->join('modulos', 'modulo_alumnos.idModulo', '=', 'modulos.id')
            ->where('modulos.id', $idModulo)
            ->select('alumnos.*')
            ->get();

        return view('moduloAlumno', compact(['idModulo', 'alumnos']));
    }

    function guardarAlumno(Request $request, $idModulo)
    {

        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellidos = $request->apellidos;
        $alumno->email = $request->email;
        $alumno->save();

        $moduloAlumno = new ModelsModuloAlumno();
        $moduloAlumno->idModulo = $idModulo;
        $moduloAlumno->idAlumno = $alumno->id;
        $moduloAlumno->save();


        return redirect(route('listarModuloAlumnos', ['id' => $idModulo]));
    }
}
