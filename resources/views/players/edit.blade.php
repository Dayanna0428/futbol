<h1>Editar jugador</h1>

<form action="{{route('players.update',$player)}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nombre:
            <input type="text" name="name" value="{{$player->name}}">
        </label>
    </div>
    <div>
        <label>Posición:
            <input type="text" name="position" value="{{$player->position}}">
        </label>
    </div>
    <div>
        <label>Fecha de Nacimiento:
            <input type="date" name="birthdate" value="{{$player->birthdate}}">
        </label>
    </div>
    <div>
        <label>Equipo:
            <select name="team_id" id="">
                
                @foreach ($teams as  $team)
                <option value="{{$team->id}}">{{$team->name}}</option>

                @endforeach
            </select>
        </label>
    </div>

    <button>Actualizar</button>


</form>
<a href="{{route('players.index')}}">volver</a>
