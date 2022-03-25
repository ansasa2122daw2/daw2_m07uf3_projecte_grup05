@extends('disseny')

@section('content')

<h1>Llista de Lloguer</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>DNI client</td>
          <td>Matricula</td>
          <td>Data prestec</td>
          <td>Data devolución</td>
          <td>Lloc devolución</td>
          <td>Preu dia</td>
          <td>Prestec retorn disponible</td>
          <td>Tipus assegurança</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
    @if (is_array($lloguers ?? '') || is_object($lloguers ?? ''))
        @foreach($lloguers as $cli)
        <tr>
            <td>{{$cli->dni_client}}</td>
            <td>{{$cli->matricula_auto}}</td>
            <td>{{$cli->data_prestec}}</td>
            <td>{{$cli->data_devolucion}}</td>
            <td>{{$cli->lloc_devolucion}}</td>
            <td>{{$cli->preu_dia}}</td>
            <td>{{$cli->prestec_retorn_disponible}}</td>
            <td>{{$cli->tipus_asseguranca}}</td>

            <td class="text-left">
                <a href="{{ route('lloguers.edit', $cli->dni_client)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('lloguers.destroy', $cli->dni_client)}}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
        @else
          {{ Redirect::to('/lloguers') }}

    @endif
    </tbody>
  </table>
<div>
<br><a href="{{ url('lloguers/create') }}">Accés directe a la vista de creació de lloguers</a>
<br>
<br><a href="{{ url('welcome') }}">Vista principal</a>
@endsection