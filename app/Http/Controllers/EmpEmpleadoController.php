<?php

namespace App\Http\Controllers;

use App\emp_empleado;
use Illuminate\Http\Request;

class EmpEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos_empleado = $request->except('_token','confirm_password');
        emp_empleado::insert($datos_empleado);
        return response()->json([$datos_empleado]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\emp_empleado  $emp_empleado
     * @return \Illuminate\Http\Response
     */
    public function show(emp_empleado $emp_empleado)
    {
        return view('nuevo_empleado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\emp_empleado  $emp_empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(emp_empleado $emp_empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\emp_empleado  $emp_empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emp_empleado $emp_empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\emp_empleado  $emp_empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(emp_empleado $emp_empleado)
    {
        //
    }
}
