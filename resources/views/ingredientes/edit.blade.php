@extends('app')
@section('content')
<h4><a href="/ingredientes"> <i class="fas fa-arrow-circle-left"> </i></a>Ingredientes</h4>
<div class="card">
<form class="card-body" action="/ingredientes/update" method="POST">
@csrf

  <div class="form-group">
    <label for="formGroupExampleInput">nome</label>
    <input type="hidden" name="id" value="{{$ingrediente->id}}" required>
    <input type="text" class="form-control" name="nome" value="{{$ingrediente->nome}}" required>
  </div>
  <div class="form-group">
  <button  class="btn btn-success"> <i class="fas fa-pen"> </i>Salvar</button>
  </div>
</form>
  
</div>

@endsection