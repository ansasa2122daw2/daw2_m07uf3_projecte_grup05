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
        return view('indexusuaris', compact('usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crearusuaris');
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

        return redirect('/indexusuaris')->with('completed', 'Usuari creado!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
        //
    }
}
