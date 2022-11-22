<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Servico;
use Illuminate\Support\Facades\Redirect;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $servicio = Servicio::orderBy('id','DESC')->paginate(10);
        return view('servicio.servicioIndex',compact('servicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('servicio.crearServicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio=new Servicio;
        $persona->id=$request->get('id');   
        $servicio->nombre=$request->get('nombre'); 
        $servicio->estado=$request->get('estado'); 
        $servicio->save(); 
        return Redirect::to('servicio');
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
        $servicio=Servicio::findOrFail($id); 
        return view("servicio.editarServicio",["servicio"=>$servicio]);
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
        $servicio=Servicio::findOrFail($id);
        
        $persona->id=$request->get('id');   
        $servicio->nombre=$request->get('nombre'); 
        $servicio->estado=$request->get('estado'); 

        $servicio->update(); 
        return Redirect::to('servicio');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
