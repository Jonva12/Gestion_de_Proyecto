<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyectos;
use App\Empleados;
use Carbon\Carbon;

class proyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyectos::all();
        return view('proyectos/index', array('proyectos'=>$proyectos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleados::all();
        return view('proyectos/createProyecto', array('empleados'=>$empleados));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyectos();

        $proyecto->nombre = $request->input('nombre');
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = Carbon::createFromFormat( 'Y-m-d', $request->input('fechaI'));
        $proyecto->fechafin = Carbon::createFromFormat( 'Y-m-d', $request->input('fechaF'));
        //$proyecto->fechafin = Carbon::parse($request->input('fechaF'));
        $proyecto->horasestimadas = $request->input('horasE');
        //$proyecto->responsable = $request->get('res');

        $proyecto->save();

        $proyectos = Proyectos::all();
        return view('proyectos/index', array('proyectos'=>$proyectos));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyectos::where('id',$id)->first();
        return view('proyectos/proyecto', ['proyecto'=>$proyecto]);
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
        //
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
