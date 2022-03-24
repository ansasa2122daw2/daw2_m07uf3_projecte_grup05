@extends('disseny')

@section('content')

<h1>Llista de autos</h1>
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
          <td>Cognom</td>
          <td>Email</td>
          <td>Contrasenya</td>
          <td>Tipus</td>
          <td>Hora entrada</td>
          <td>Hora sortida</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuaris as $cli)
        <tr>
            <td>{{$cli->nom}}</td>
            <td>{{$cli->cognom}}</td>
            <td>{{$cli->email}}</td>
            <td>{{$cli->contrasenya}}</td>
            <td>{{$cli->tipus}}</td>
            <td>{{$cli->hora_entrada}}</td>
            <td>{{$cli->hora_sortida}}</td>

            <td class="text-left">
                <a href="{{ route('usuaris.edit', $cli->email)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('usuaris.destroy', $cli->email)}}" method="POST" style="display: inline-block">
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
<br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'autos</a>
@endsection