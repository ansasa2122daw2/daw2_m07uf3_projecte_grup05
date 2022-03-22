
@extends('disseny')
@section('content')
<h1>LOGIN</h1>
<div class="card mt-5">
 <div class="card-header">
 Validació de l'usuaro
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
 <form method="get" action="{{ route('autenticacio') }}">
 @csrf
 <div class="form-group">
 <label for="email">Email</label>
 <input type="text" class="form-control" name="email"/>
 </div>
 <div class="form-group">
 <label for="contrasenya">Password</label>
 <input type="password" class="form-control" name="contrasenya"/>
 </div>
 <button type="submit" class="btn btn-block btn-primary">Envia</button>
 </form>
 </div>
</div>
@endsection