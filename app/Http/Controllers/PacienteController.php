<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    //
    public function index(){

         /* $paciente = Paciente::all();

        return $paciente;*/

        $paciente = Paciente::orderBy('id', 'DESC')->paginate();
        
        return view('pacientes.index', compact('paciente'));

    }

    public function create(){

        /*$paciente = Paciente::create($request->all());

        return $paciente;*/

        $paciente = new Paciente;

        return view('pacientes.create', compact('paciente'));

    }
    
    public function store(Request $request, Paciente $paciente){

            /*$paciente = new Paciente;
            $paciente->numero_registro = $request->input('numero_registro');
            $paciente->nombres = $request->input('nombres');
            $paciente->apellidos = $request->input('apellidos');
            $paciente->servicios = $request->input('servicios');
            $paciente->save();
            return redirect()->route('paciente.create')->with('info', 'paciente creado exitosamente');
            */
            $paciente = $request->all();

            Paciente::create($paciente);

            return redirect()->route('pacientes.index')->with('info', 'paciente creado exitosamente');

         }

         /*public function show($id){

            $paciente = Paciente::FindOrFail($id);

            return view('pacientes.index',compact('paciente'));

         }*/

         public function destroy($id){

            $paciente = Paciente::FindOrFail($id);
            
            $paciente->delete();

            return redirect()->route('pacientes.index')->with('info', 'Paciente eliminado exitosamente');

            /*Paciente::find($id)->delete();

            return redirect()->back();

          /*  $paciente->delete();

            return $paciente;*/
         }

         public function edit($id){

            $paciente = Paciente::FindOrFail($id);

            return view('pacientes.edit', compact('paciente'));

         }

         public function update(Request $request, $id){

            //$paciente = $request->all();
            $paciente = Paciente::FindOrFail($id);
            //$paciente->update($paciente);
            $paciente->numero_registro = $request->input('numero_registro');
            $paciente->nombres = $request->input('nombres');
            $paciente->apellidos = $request->input('apellidos');
            $paciente->servicios = $request->input('servicios');
            $paciente->save();

            return redirect()->route('pacientes.index')->with('info', 'Paciente actualizado exitosamente');

         }     
}