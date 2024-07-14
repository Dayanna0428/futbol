<h1>Registro de Jugadores</h1>
<a href="{{route('players.create')}}" >Crear Jugador</a>

<ul>

        @foreach ($players as  $player)
        <li><a href="{{route('players.show',$player)}}">{{$player->name}}</a></li>
        @endforeach

</ul>
