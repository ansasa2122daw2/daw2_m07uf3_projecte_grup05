<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;


class ControladorClients extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();
        return view('/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/clients/crearclients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouClients = $request->validate([
            'dni_client' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'num_targeta' => 'required|max:255',
            'edat'=> 'required|max:255',
            'telefon'=> 'required|max:255',
            'tipus_targeta'=> 'required|max:255',
            'adreca'=> 'required|max:255',
            'ciutat'=> 'required|max:255',
            'pais'=> 'required|max:255',
            'num_permis_conduccio'=> 'required|max:255',
            'email'=> 'required|max:255',
            'punts_permis'=> 'required|max:255',
        ]);
        $clients = Clients::create($nouClients);

        return redirect('/clients')->with('completed', 'Cliente creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($dni_client)
    {
        return view("/clients/index");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($dni_client)
    {
        $clients = Clients::findOrFail($dni_client);
        return view('/clients/actualitza', compact('clients'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dni_client)
    {
        $dades = $request->validate([
            'dni_client' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'num_targeta' => 'required|max:255',
            'edat'=> 'required|max:255',
            'telefon'=> 'required|max:255',
            'tipus_targeta'=> 'required|max:255',
            'adreca'=> 'required|max:255',
            'ciutat'=> 'required|max:255',
            'pais'=> 'required|max:255',
            'num_permis_conduccio'=> 'required|max:255',
            'email'=> 'required|max:255',
            'punts_permis'=> 'required|max:255',
        ]);

        Clients::wheredni_clients($dni_client)->update($dades);
        return redirect('/clients')->with('completed', 'Cliente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dni_client)
    {
        $clients = Clients::findOrFail($dni_client);
        $clients->delete();
        return redirect('/clients')->with('completed', 'Cliente borrado');
    }
}
