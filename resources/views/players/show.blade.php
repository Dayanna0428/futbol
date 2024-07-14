<h1>Detalles del Jugador</h1>

<p><strong>Codigo:</strong>{{$player->id}}</p>
<p><strong>Nombre:</strong>{{$player->name}}</p>
<p><strong>Posición:</strong>{{$player->position}}</p>
<p><strong>Fecha de NAcimiento:</strong>{{$player->bithdate}}</p>
<p><strong>Equipo:</strong>{{$player->team->name}}</p>


<a href="{{route('players.edit',$player)}}">Editar</a>

<form action="{{route('players.destroy',$player)}} " method="POST"">
    @csrf
    @method('DELETE')
    <button>Eliminar</button>

</form>

<a href="{{route('players.index')}}">volver</a>
