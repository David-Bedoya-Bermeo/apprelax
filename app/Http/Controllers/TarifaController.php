<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarifa;
use App\Models\Plan;
use Illuminate\Support\Facades\Redirect;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tarifa = Tarifa::orderBy('id','DESC')->paginate(10);
        return view ('tarifa.tarifaIndex',compact('tarifa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('tarifa.crearTarifa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarifa=new Tarifa;
 
        $tarifa->nombre=$request->get('precio'); 

        $tarifa->save(); 
        return Redirect::to('tarifa');
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
         $tarifa=Tarifa::findOrFail($id); 
        return view("tarifa.editarTarifa",["tarifa"=>$tarifa]);
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
        $habitacion->precio=$request->get('precio');
        
        $habitacion->update(); 
        return Redirect::to('tarifa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarifa=Tarifa::findOrFail($id); 
        $tarifa->delete(); 
        return Redirect::to('tarifa');
    }
}
