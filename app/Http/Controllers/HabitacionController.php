<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use App\Models\Reserva;
use Illuminate\Support\Facades\Redirect;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $habitacion = Habitacion::orderBy('id','DESC')->paginate(10);
        return view ('habitacion.habitacionIndex',compact('habitacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('habitacion.crearHabitacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitacion=new Habitacion;
 
        $habitacion->nombre=$request->get('nombre'); 
        $habitacion->numPiso=$request->get('numPiso');
        $habitacion->tipo=$request->get('tipo');
        $habitacion->descripcion=$request->get('descripcion'); 
        $habitacion->estado=$request->get('estado');
        $habitacion->imagen=$request->get('imagen');

        $habitacion->save(); 
        return Redirect::to('habitacion');
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
        $habitacion=Habitacion::findOrFail($id); 
        return view("habitacion.editarHabitacion",["habitacion"=>$habitacion]);
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
        $habitacion=Habitacion::findOrFail($id);
          
        $habitacion->nombre=$request->get('nombre'); 
        $habitacion->numPiso=$request->get('numPiso'); 
        $habitacion->estado=$request->get('tipo');
        $habitacion->descripcion=$request->get('descripcion'); 
        $habitacion->estado=$request->get('estado'); 
        $habitacion->imagen=$request->get('imagen');
        
        $habitacion->update(); 
        return Redirect::to('habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion=Habitacion::findOrFail($id); 
        $habitacion->delete(); 
        return Redirect::to('habitacion');
    }
}
