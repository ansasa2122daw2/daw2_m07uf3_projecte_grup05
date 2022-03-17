@extends('disseny')

@section('content')

<h1>Llista de clients</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nom</td>
          <td>Email</td>
          <td>Telèfon</td>
          <td>DNI</td>
          <td>Cognoms</td>
          <td>Numero Targeta</td>
          <td>Adreça</td>
          <td>Ciutat</td>
          <td>Pais</td>
          <td>Numero permis conduccio</td>
          <td>Punts permis</td>
          <td>Edat</td>
          <td>Tipus Targeta</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $cli)
        <tr>
            <td>{{$cli->id}}</td>
            <td>{{$cli->nom}}</td>
            <td>{{$cli->email}}</td>
            <td>{{$cli->telefon}}</td>
            <td>{{$cli->dni_client}}</td>
            <td>{{$cli->cognoms}}</td>
            <td>{{$cli->num_targeta}}</td>
            <td>{{$cli->adreca}}</td>
            <td>{{$cli->ciutat}}</td>
            <td>{{$cli->pais}}</td>
            <td>{{$cli->num_permis_conduccio}}</td>
            <td>{{$cli->punts_permis}}</td> 
            <td>{{$cli->edat}}</td>
            <td>{{$cli->tipus_targeta}}</td>

            
            <td class="text-left">
                <a href="{{ route('clients.edit', $cli->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('clients.destroy', $cli->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació d'empleats</a>
@endsection