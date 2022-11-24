<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Habitacion;
use App\Models\Cliente;
use App\Models\Empleado;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $habitacion=Habitacion::orderBy('id_habitacion','DESC')
         ->select('habitaciones.habitacion_id','habitaciones.tipo') 
         ->get(); return view('main.create',compact('habitacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva=new Reserva;
        $reserva->cantidad_Personas=$request->get('cantidad_Personas'); 
        $reserva->fecha_Reserva=$request->get('fecha_Reserva'); 
        $reserva->dia_Llegada=$request->get('dia_Llegada'); 
        $reserva->dia_Salida=$request->get('dia_Salida'); 
        $reserva->estado=$request->get('estado');  
        $reserva->save(); 
        return Redirect::to('main');
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
        //
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
         $reserva=Reserva::findOrFail($id);
     
        $reserva->cantidad_Personas=$request->get('cantidad_Personas'); 
        $reserva->fecha_Reserva=$request->get('fecha_Reserva'); 
        $reserva->dia_Llegada=$request->get('dia_Llegada'); 
        $reserva->dia_Salida=$request->get('dia_Salida'); 
        $reserva->estado->get('estado'); 
        $reserva->update(); 
        return Redirect::to('reserva');
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
