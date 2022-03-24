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
          <td>Matricula</td>
          <td>Marca</td>
          <td>Model</td>
          <td>Color</td>
          <td>Tipus Combustible</td>
          <td>Numero Bastidor</td>
          <td>Numero plazas</td>
          <td>Numero Portes</td>
          <td>Grandaria maleter</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($autos as $cli)
        <tr>
            <td>{{$cli->matricula_auto}}</td>
            <td>{{$cli->marca}}</td>
            <td>{{$cli->model}}</td>
            <td>{{$cli->color}}</td>
            <td>{{$cli->tipus_combustible}}</td>
            <td>{{$cli->num_bastidor}}</td>
            <td>{{$cli->num_plazas}}</td>
            <td>{{$cli->num_portes}}</td>
            <td>{{$cli->grandaria_maleter}}</td>

            <td class="text-left">
                <a href="{{ route('autos.edit', $cli->matricula_auto)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('autos.destroy', $cli->matricula_auto)}}" method="POST" style="display: inline-block">
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
<br><a href="{{ url('autos/create') }}">Accés directe a la vista de creació d'autos</a>
@endsection