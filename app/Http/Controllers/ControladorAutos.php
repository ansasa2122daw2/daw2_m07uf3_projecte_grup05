<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autos;

class ControladorAutos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Autos::all();
        return view('/autos/indexauto', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/autos/crearautos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouAutos = $request->validate([
            'matricula_auto' => 'required|max:255',
            'marca' => 'required|max:255',
            'model' => 'required|max:255',
            'color' => 'required|max:255',
            'tipus_combustible'=> 'required|max:255',
            'num_bastidor'=> 'required|max:255',
            'num_plazas'=> 'required|max:255',
            'num_portes'=> 'required|max:255',
            'grandaria_maleter'=> 'required|max:255',
        ]);
        $autos = Autos::create($nouAutos);

        return redirect('/autos')->with('completed', 'Auto creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($matricula_auto)
    {
        return view("autos/indexauto");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($matricula_auto)
    {
        $autos = Autos::findOrFail($matricula_auto);
        return view('/autos/actualitzaautos', compact('autos')); //FALTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricula_auto)
    {
        $dades = $request->validate([
            'matricula_auto' => 'required|max:255',
            'marca' => 'required|max:255',
            'model' => 'required|max:255',
            'color' => 'required|max:255',
            'tipus_combustible'=> 'required|max:255',
            'num_bastidor'=> 'required|max:255',
            'num_plazas'=> 'required|max:255',
            'num_portes'=> 'required|max:255',
            'grandaria_maleter'=> 'required|max:255',
        ]);

        Autos::wherematricula_auto($matricula_auto)->update($dades);
        return redirect('/autos')->with('completed', 'Auto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($matricula_auto)
    {
        $autos = Autos::findOrFail($matricula_auto);
        $autos->delete();
        return redirect('/autos')->with('completed', 'Auto borrado');
    }
}
