
@extends('disseny')

@section('content')

<h1>Aplicació d'administració de usuaris</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou client
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
      <form method="post" action="{{ route('usuaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="cognom">Cognom</label>
              <input type="text" class="form-control" name="cognom"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="contrasenya">Contrasenya</label>
              <input type="text" class="form-control" name="contrasenya"/>
          </div>
          <div class="form-group">
              <label for="tipus">Tipus</label>
              <select name="tipus">
                  <option value="">Selecciona</option>
                  <option value="treballador">treballador</option>
                  <option value="cap_departament">Cap departament</option>
                </select>
          </div>

          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista de usuaris</a>
@endsection