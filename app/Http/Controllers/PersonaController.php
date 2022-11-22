<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaFormRequest;
use App\Models\Persona;
use App\Models\Empleado;
use App\Models\User;
use App\Models\Cliente;

use Illuminate\Support\Facades\Redirect;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::orderBy('id','DESC')->paginate(10);
        return view('persona.personaIndex',compact('persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('persona.crearPersona');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaFormRequest $request)
    {
        $persona=new Persona;
          
        $persona->nombre=$request->get('nombre'); 
        $persona->a_paterno=$request->get('a_paterno'); 
        $persona->a_materno=$request->get('a_materno'); 
        $persona->fecha_nacimiento=$request->get('fecha_Nacimiento'); 
        $persona->edad=$request->get('edad');  
        $persona->tipo_Documento=$request->get('tipo_Documento');
        $persona->num_Documento=$request->get('num_Documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        $persona->save(); 
        return Redirect::to('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona=Persona::findOrFail($id); 
        return view("persona.editarPersona",["persona"=>$persona]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaFormRequest $request, $id)
    {
        $persona=Persona::findOrFail($id);
         
        $persona->nombre=$request->get('nombre'); 
        $persona->a_paterno=$request->get('a_paterno'); 
        $persona->a_materno=$request->get('a_materno'); 
        $persona->fecha_nacimiento=$request->get('fecha_Nacimiento'); 
        $persona->edad=$request->get('edad');  
        $persona->tipo_Documento=$request->get('tipo_Documento');
        $persona->num_Documento=$request->get('num_Documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
    
        $persona->update(); 
        return Redirect::to('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona=Persona::findOrFail($id); 
        $persona->delete(); 
        return Redirect::to('persona');
    }
}
