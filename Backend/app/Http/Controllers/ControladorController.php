<?php

namespace App\Http\Controllers;

use App\Models\Modelo;

use Illuminate\Http\Request;

class ControladorController extends Controller
{
    
    public function index()
    {
        //
        $datos=Modelo::all();
        return $datos;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $dato= new Modelo();
        $dato->Nombre= $request->Nombre;
        $dato->Creditos=$request->Creditos;
        $dato->Horas=$request->Horas;
        $dato->Pregrado=$request->Pregrado;
        $dato->save();
        return $dato;
    }

    public function show($id)
    {
        //
        $dato= Modelo::find($id);
        return $dato;
    }

    public function edit($id)
    {
        //

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
