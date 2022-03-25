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
        <form method="POST" action="{{ route('lloguers.update', $lloguers ?? ''->dni_client) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
              <label for="dni_client">DNI client</label>
              <input type="text" class="form-control" name="dni_client"/>
          </div>
          <div class="form-group">
              <label for="matricula_auto">Matricula</label>
              <input type="text" class="form-control" name="matricula_auto"/>
          </div>
          <div class="form-group">
              <label for="data_prestec">Data prestec</label>
              <input type="date" class="form-control" name="data_prestec"/>
          </div>
          <div class="form-group">
              <label for="data_devolucion">Data devolución</label>
              <input type="date" class="form-control" name="data_devolucion"/>
          </div>
          <div class="form-group">
              <label for="lloc_devolucion">Lloc devolución</label>
              <input type="text" class="form-control" name="lloc_devolucion"/>
          </div>
          <div class="form-group">
              <label for="preu_dia">Preu dia</label>
              <input type="text" class="form-control" name="preu_dia"/>
          </div>
          <div class="form-group">
              <label for="prestec_retorn_disponible">Prestec retorn disponible</label>
              <input type="text" class="form-control" name="prestec_retorn_disponible"/>
          </div>
          <div class="form-group">
              <label for="tipus_asseguranca">Tipus asegurança</label>
              <select name="tipus_asseguranca">
                  <option value="">Selecciona</option>
                  <option value="Franquicia_1000Euros">Franquicia 1000 euros</option>
                  <option value="Franquicia_500Euros">Franquicia 500 euros</option>
                  <option value="Sense_franquicia">Sense franquicia</option>
                </select>
          </div>
          
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('lloguers') }}">Accés directe a la Llista de lloguers</a>
@endsection