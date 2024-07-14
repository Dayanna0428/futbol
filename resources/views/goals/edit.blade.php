<h1>Editar  GOl</h1>

<form action="{{route('goals.update',$goal)}}" method="POST">
    @csrf
    @method('PUT')


<div>
    <label> Description:
        <input type="text" name="description" value="{{$goal->description}}" >
    </label>
</div>

<div>
    <label> minuto:
        <input type="text" name="minute" value="{{$goal->minute}}">
    </label>
</div>

<div>
    <label> Jugador que marco </label>
    <select name="player_id" id="">
        <option value="">Elije</option>
        @foreach ($players as $player )
            <option value="{{$player->id}}">{{$player->name}}</option>

        @endforeach

    </select>
</div>
<div>
    <label> Fecha del gol </label>
    <select name="game_id" id="">
        <option value="">Elije</option>
        @foreach ($games as $game )
            <option value="{{$game->id}}">{{$game->date}}</option>

        @endforeach

    </select>
</div>
<button>Editar</button>

</form>
<a href="{{route('goals.show')}}">Volver</a>
