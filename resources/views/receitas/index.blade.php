@extends('app')
@section('content')
<h4><a href="/receitas/add"> <i class="fas fa-plus-circle mr-2"> </i><a>Receitas</h4>
<ul class="list-group mt-4">
          @if (isset($ingredientes) && !empty($ingredientes))

            @foreach ($receitas as $i)
            <li class="list-group-item">
                    <h5 class="card-title">{{$i->nome}}</h5>
                        <a href="/receitas/edit/{{$i->id}}" class="btn btn-primary">editar</a>
                        <a href="/receitas/del/{{$i->id}}" class="btn btn-danger">deletar</a> 
            </li>
            @endforeach
            
        @else
        <li class="list-group-item"> <h5 class="card-title">Nenhum receita cadastrada</h5></li>
        @endif
        
</ul>


@endsection