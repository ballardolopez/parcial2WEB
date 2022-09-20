<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texto=trim($request->get('texto'));
        $cliente=cliente::table('cliente')
        ->select('id','Primer_nombre','Segundo_nombre','Primer_apellido', 'Segundo_apellido', 'Direccion', 'Telefono')
        ->where('Primer_nombre','LIKE','%'.$texto.'%')
        ->orwhere('Segundo_apellido','LIKE','%'.$texto.'%')
        ->orderBy('Primer_apellido','asc')
        ->paginate(10);
        //$cliente=cliente::orderByDesc('id')->get();
        return view('cliente.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $datos=$request->validate(
        [
            'Primer_nombre'            =>'required|max:60',
            'Segundo_nombre'            =>'required|max:60',
            'Primer_apellido'            =>'required|max:60',
            'Segundo_apellido'            =>'required|max:60',
            'Direccion'            =>'required|max:60',
            'Telefono'            =>'required|max:60'
        ]);

    $cliente=cliente::create($datos);
    return redirect()->route('cliente.index');
    //dd($datos); debugea




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
