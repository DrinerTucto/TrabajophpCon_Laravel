<?php

namespace App\Http\Controllers;

use App\Models\recur;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class RecurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $re['reservaciones']=recur::paginate(5);
        return view("reservacion.index",$re);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("reservacion.reserva");

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
        //
        $datosreservacion=request()->except('_token');
if ($request->hasFile('Foto')){

    $datosreservacion['Foto']=$request->file('Foto')->store('imagenes','public');
}

        Recur::insert($datosreservacion);

        return  response()->json($datosreservacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recur  $recur
     * @return \Illuminate\Http\Response
     */
    public function show(recur $recur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recur  $recur
     * @return \Illuminate\Http\Response
     */
    public function edit(recur $recur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recur  $recur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recur $recur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recur  $recur
     * @return \Illuminate\Http\Response
     */
    public function destroy(recur $recur)
    {
        //
    }
}
