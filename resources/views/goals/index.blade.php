<h1>Registro de Goles marcados por jugador</h1>
<a href="{{route('goals.create')}}">Agregar gol</a>

<ul>
    @foreach ($goals as $goal )
        <li> <a href="{{route('goals.show',$goal)}}">{{$goal->player->name}} </a></li>

    @endforeach
</ul>
