@extends('app')
@section('content')
<h4><a href="/ingredientes/add"> <i class="fas fa-plus-circle"> </i><a>Ingredientes</h4>
<ul class="list-group mt-4">
          @if (isset($ingredientes) && !empty($ingredientes))

            @foreach ($ingredientes as $i)
            <li class="list-group-item">
                    <h5 class="card-title">{{$i->nome}}</h5>
                        <a href="/ingredientes/edit/{{$i->id}}" class="btn btn-primary">editar</a>
                        <a href="/ingredientes/del/{{$i->id}}" class="btn btn-danger">deletar</a> 
            </li>
            @endforeach
            
        @else
        <li class="list-group-item"> <h5 class="card-title">Nenhum ingrediente cadastrado</h5></li>
        @endif
        
</ul>


@endsection