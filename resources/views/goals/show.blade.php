<h1>Detalles del gol</h1>
<p><strong>id:</strong>{{$goal->id}}</p>
<p><strong>Descripcion:</strong>{{$goal->description}}</p>
<p><strong>Minuto:</strong>{{$goal->minuto}}</p>
<p><strong>Jugador que marco:</strong>{{$goal->player->name}}</p>
<p><strong>Partido Fecha:</strong>{{$goal->game->date}}</p>

<a href="{{route('goals.edit',$goal)}}">Editar</a>
<form action="{{route('goals.destroy',$goal)}}" method="POST">
    @csrf
    @method('DELETE')

    <button>Eliminar</button>
</form>
<a href="{{route('goals.index')}}">Volver</a>
