@extends('disseny')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('autos.update', $autos ?? ''->matricula_auto) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
              <label for="matricula_auto">Matricula</label>
              <input type="text" class="form-control" name="matricula_auto"/>
          </div>
          <div class="form-group">
              <label for="num_bastidor">Numero bastidor</label>
              <input type="text" class="form-control" name="num_bastidor"/>
          </div>
          <div class="form-group">
              <label for="marca">Marca</label>
              <input type="text" class="form-control" name="marca"/>
          </div>
          <div class="form-group">
              <label for="model">Model</label>
              <input type="text" class="form-control" name="model"/>
          </div>
          <div class="form-group">
              <label for="color">Color</label>
              <input type="tel" class="form-control" name="color"/>
          </div>
          <div class="form-group">
              <label for="num_plazas">Nombre de plaçes</label>
              <input type="text" class="form-control" name="num_plazas"/>
          </div>
          <div class="form-group">
              <label for="num_portes">Nombre de portes</label>
              <input type="text" class="form-control" name="num_portes"/>
          </div>
          <div class="form-group">
              <label for="grandaria_maleter">Grandària del maleter</label>
              <input type="text" class="form-control" name="grandaria_maleter"/>
          </div>
          <div class="form-group">
              <label for="tipus_combustible">Tipus combustible</label>
              <select name="tipus_combustible">
                  <option value="">Selecciona</option>
                  <option value="gasolina">Gasolina</option>
                  <option value="diesel">Diesel</option>
                  <option value="electric">Electric</option>
                </select>
            </div>
          
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('autos') }}">Accés directe a la Llista de autos</a>
@endsection