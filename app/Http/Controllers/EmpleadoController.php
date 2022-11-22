<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Persona;
use App\Models\Reserva;



class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = Empleado::orderBy('id','DESC')->paginate(10);
        return view('empleado.empleadoIndex',compact('empleado'));
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
        
        return view('empleado.crearEmpleado',compact('persona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados=new Empleado;
        $empleados->codigo=$request->get('codigo'); 
        $empleados->salario=$request->get('salario'); 
        $empleados->tipoContrato=$request->get('tipoContrato'); 
        $empleados->fechaIngreso=$request->get('fechaIngreso'); 
        $empleados->fechaRetiro=$request->get('fechaRetiro');   

        $empleados->save(); 
        return Redirect::to('empleado');
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
        $empleado=Empleado::findOrFail($id); 
        return view("empleado.editarEmpleado",["empleado"=>$empleado]);
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
        
        $empleados=Empleado::findOrFail($id);
     
        $empleados->codigo=$request->get('codigo'); 
        $empleados->salario=$request->get('salario'); 
        $empleados->tipoContrato=$request->get('tipoContrato'); 
        $empleados->fechaIngreso=$request->get('fechaIngreso'); 
        $empleados->fechaRetiro=$request->get('fechaRetiro'); 

        $empleados->update(); 
        return Redirect::to('empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleados=Empleado::findOrFail($id); 
        $empleados->delete(); 
        return Redirect::to('empleado');
    }
}
