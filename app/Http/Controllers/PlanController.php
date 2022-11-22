<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Tarifa;
use App\Models\Habitacion;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Plan::orderBy('id','DESC')->paginate(10);
        return view('plan.planIndex',compact('plan'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('plan.crearPlan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan=new Plan; 
        $plan->nombre=$request->get('nombre'); 
        $plan->descripcion=$request->get('descripcion');
       
        $plan->save(); 
        return Redirect::to('plan');
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
        $plan=Plan::findOrFail($id); 
        return view("plan.editarplan",["plan"=>$plan]);
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
        $plan=Plan::findOrFail($id);
          
        $plan->nombre=$request->get('nombre'); 
        $plan->descripcion=$request->get('descripcion');
        
        $plan->update(); 
        return Redirect::to('plan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan=Plan::findOrFail($id); 
        $plan->delete(); 
        return Redirect::to('plan');
    }
}
