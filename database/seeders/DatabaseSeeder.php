<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumno;
use App\Models\Modulo;
use App\Models\ModuloAlumno;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->crearAlumnos();
        $this->crearModulos();
        $this->crearModulosAlumnos();
    }

    function crearModulos()
    {
        $modulo1 = new Modulo();
        $modulo2 = new Modulo();
        $modulo1->nombre = 'Modulo1';
        $modulo2->nombre = 'Modulo2';
        $modulo1->save();
        $modulo2->save();
    }

    function crearAlumnos()
    {
        $alumno1 = new Alumno();
        $alumno1->nombre = 'Alumno1';
        $alumno1->apellidos = 'Apellido1 Apellido1';
        $alumno1->email = 'alumno1@alumno.alumno';
        $alumno2 = new Alumno();
        $alumno2->nombre = 'Alumno2';
        $alumno2->apellidos = 'Apellido2 Apellido2';
        $alumno2->email = 'alumno2@alumno.alumno';
        $alumno3 = new Alumno();
        $alumno3->nombre = 'Alumno3';
        $alumno3->apellidos = 'Apellido3 Apellido3';
        $alumno3->email = 'alumno3@alumno.alumno';

        $alumno4 = new Alumno();
        $alumno4->nombre = 'Alumno4';
        $alumno4->apellidos = 'Apellido4 Apellido4';
        $alumno4->email = 'alumno4@alumno.alumno';
        $alumno5 = new Alumno();
        $alumno5->nombre = 'Alumno5';
        $alumno5->apellidos = 'Apellido5 Apellido5';
        $alumno5->email = 'alumno5@alumno.alumno';
        $alumno6 = new Alumno();
        $alumno6->nombre = 'Alumno6';
        $alumno6->apellidos = 'Apellido6 Apellido6';
        $alumno6->email = 'alumno6@alumno.alumno';

        $alumno1->save();
        $alumno2->save();
        $alumno3->save();
        $alumno4->save();
        $alumno5->save();
        $alumno6->save();
    }

    function crearModulosAlumnos()
    {
        $moduloAlumno1 = new ModuloAlumno();
        $moduloAlumno1->idAlumno = 1;
        $moduloAlumno1->idModulo = 1;
        $moduloAlumno2 = new ModuloAlumno();
        $moduloAlumno2->idAlumno = 2;
        $moduloAlumno2->idModulo = 1;
        $moduloAlumno3 = new ModuloAlumno();
        $moduloAlumno3->idAlumno = 3;
        $moduloAlumno3->idModulo = 1;
        $moduloAlumno4 = new ModuloAlumno();
        $moduloAlumno4->idAlumno = 4;
        $moduloAlumno4->idModulo = 2;
        $moduloAlumno5 = new ModuloAlumno();
        $moduloAlumno5->idAlumno = 5;
        $moduloAlumno5->idModulo = 2;
        $moduloAlumno6 = new ModuloAlumno();
        $moduloAlumno6->idAlumno = 6;
        $moduloAlumno6->idModulo = 2;

        $moduloAlumno1->save();
        $moduloAlumno2->save();
        $moduloAlumno3->save();
        $moduloAlumno4->save();
        $moduloAlumno5->save();
        $moduloAlumno6->save();
    }
}
