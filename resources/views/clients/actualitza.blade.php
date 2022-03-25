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
        <form method="POST" action="{{ route('clients.update', $clients ?? ''->dni_client) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="cognoms">Cognoms</label>
              <input type="text" class="form-control" name="cognoms"/>
          </div>
          <div class="form-group">
              <label for="num_targeta">Número targeta</label>
              <input type="text" class="form-control" name="num_targeta"/>
          </div>
          <div class="form-group">
              <label for="edat">Edat</label>
              <input type="text" class="form-control" name="edat"/>
          </div>
          <div class="form-group">
              <label for="telefon">Telèfon</label>
              <input type="tel" class="form-control" name="telefon"/>
          </div>
          <div class="form-group">
              <label for="adreca">Adreça</label>
              <input type="text" class="form-control" name="adreca"/>
          </div>
          <div class="form-group">
              <label for="ciutat">Ciutat</label>
              <input type="text" class="form-control" name="ciutat"/>
          </div>
          <div class="form-group">
              <label for="pais">Pais</label>
              <input type="text" class="form-control" name="pais"/>
          </div>
          <div class="form-group">
              <label for="tipus_targeta">Tipus targeta</label>
              <select name="tipus_targeta">
                  <option value="">Selecciona</option>
                  <option value="debit">Débit</option>
                  <option value="credit">Credit</option>
                </select>
          </div>
          <div class="form-group">
              <label for="num_permis_conduccio">Número permís conducció</label>
              <input type="text" class="form-control" name="num_permis_conduccio"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="punts_permis">Punts carnet</label>
              <input type="text" class="form-control" name="punts_permis"/>
          </div>
          <div class="form-group">
              <label for="dni_client">DNI</label>
              <input type="text" class="form-control" name="dni_client"/>
          </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a
@endsection