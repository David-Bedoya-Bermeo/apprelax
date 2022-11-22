<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Reserva;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente=Cliente::orderBy('id','DESC')->paginate(10);

        return view('cliente.clienteIndex',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona=Persona::orderBy('id','DESC')
        ->select('personas.id',
        'personas.nombre','personas.a_paterno') 
        ->get(); 
        
        return view('cliente.crearCliente',compact('persona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $cliente=new Cliente;
        $cliente->tipo_Cliente=$request->get('tipo_Cliente'); 
        $cliente->nombreEmpresa=$request->get('nombreEmpresa'); 
        $cliente->nit=$request->get('nit'); 
        $cliente->pais=$request->get('pais'); 
        
        $cliente->save(); 
        return Redirect::to('cliente');
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
        $cliente=Cliente::findOrFail($id);

        return view("cliente.editarCliente",["cliente"=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente=Cliente::findOrFail($id);
  
        $cliente->tipo_Cliente=$request->get('tipo_Cliente'); 
        $cliente->nombreEmpresa=$request->get('nombreEmpresa'); 
        $cliente->nit=$request->get('nit'); 
        $cliente->pais=$request->get('pais');
        $cliente->persona_id=$request->get('persona_id');  
           
        $cliente->update(); 
        return Redirect::to('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id); 
        $cliente->delete(); 
        return Redirect::to('cliente');
    }
}
