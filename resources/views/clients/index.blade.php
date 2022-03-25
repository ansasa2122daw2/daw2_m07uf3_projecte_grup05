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
    @if (is_array($clients ?? '') || is_object($clients ?? ''))
        @foreach($clients ?? '' as $cli)
        <tr>
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
                <a href="{{ route('clients.edit', $cli->dni_client)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('clients.destroy', $cli->dni_client)}}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
        @else
          {{ Redirect::to('/clients') }}

    @endif
    </tbody>
  </table>
<div>
<br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació d'empleats</a>
<br>
<br><a href="{{ url('welcome') }}">Vista principal</a>
@endsection