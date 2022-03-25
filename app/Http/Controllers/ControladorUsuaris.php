<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuaris = Usuaris::all();
        return view('/usuaris/indexusuaris', compact('usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/usuaris/crearusuaris');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
            'nom' => 'required|max:255',
            'cognom' => 'required|max:255',
            'email' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'tipus'=> 'required|max:255',
        
        ]);
        $usuaris = Usuaris::create($nouUsuari);

        return redirect('/usuaris')->with('completed', 'Usuari creado!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($email)
    {
        $usuaris = Usuaris::findOrFail($email);
        return view('/usuaris/actualitzausuaris', compact('usuaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $email)
    {
        $dades = $request->validate([
            'nom' => 'required|max:255',
            'cognom' => 'required|max:255',
            'email'=> 'required|max:255',
            'contrasenya'=> 'required|max:255',
            'tipus'=> 'required|max:255',
        ]);

        Usuaris::whereemail($email)->update($dades);
        return redirect('/usuaris')->with('completed', 'Usuari actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        $usuaris = Usuaris::findOrFail($email);
        $usuaris->delete();
        return redirect('/usuaris')->with('completed', 'Usuari borrado');
    }
}
