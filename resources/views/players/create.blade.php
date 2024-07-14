<h1>Crear jugador</h1>

<form action="{{ route('players.store') }}" method="POST">
    @csrf
    <div>
        <label>Nombre:
            <input type="text" name="name">
        </label>
    </div>
    <div>
        <label>Posición:
            <input type="text" name="position">
        </label>
    </div>
    <div>
        <label>Fecha de Nacimiento:
            <input type="date" name="birthdate">
        </label>
    </div>
    <div>
        <label>Equipo:
            <select name="team_id" id="team_id">
                <option value="">Elija una opción</option>
                @foreach ($teams as $key => $team)
                    <option value="{{ $team->id }}">Equipo {{ $key + 1 }}</option>
                @endforeach
            </select>
        </label>
    </div>

    <button type="submit">Guardar</button>
</form>
<a href="{{ route('players.index') }}">Volver</a>