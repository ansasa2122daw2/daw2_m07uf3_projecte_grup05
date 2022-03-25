<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloguer;

class ControladorLloguers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lloguers = Lloguer::all();
        return view('/lloguers/indexlloguer', compact('lloguers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/lloguers/crearlloguer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouLloguer = $request->validate([
            'dni_client' => 'required|max:255',
            'matricula_auto' => 'required|max:255',
            'data_prestec' => 'required|max:255',
            'data_devolucion' => 'required|max:255',
            'lloc_devolucion'=> 'required|max:255',
            'preu_dia'=> 'required|max:255',
            'prestec_retorn_disponible'=> 'required|max:255',
            'tipus_asseguranca'=> 'required|max:255',
        
        ]);
        $lloguers = Lloguer::create($nouLloguer);

        return redirect('/lloguers')->with('completed', 'Lloguer creado!');
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
