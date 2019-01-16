@extends('app')
@section('content')
<h4><a href="/receitas"> <i class="fas fa-arrow-circle-left mr-2"> </i></a>Receitas</h4>
<div class="card">
<form class="card-body" action="/receitas/store" method="POST">
@csrf

  <div class="form-group">
    <label for="formGroupExampleInput">nome</label>
    <input type="text" class="form-control" name="nome" required>
  </div>
  <div class="form-group">
  <button  class="btn btn-success"> <i class="fas fa-pen"> </i>Salvar</button>
  </div>
</form>
  
</div>

@endsection