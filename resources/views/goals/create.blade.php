<h1>Crear GOL</h1>

<form action="{{ route('goals.store') }}" method="POST">
    @csrf

    <div>
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" required>
    </div>

    <div>
        <label for="description">Descripción:</label>
        <input type="text" name="description" id="description" required>
    </div>

    <div>
        <label for="minute">Minuto:</label>
        <input type="time" name="minute" id="minute" required>
    </div>

    <div>
        <label for="player_name">Jugador que marcó:</label>
        <input type="text" name="player_name" id="player_name" placeholder="Escribir nombre del jugador" required>
    </div>

    <div>
        <label for="game_date">Fecha del gol:</label>
        <input type="date" name="game_date" id="game_date" required>
    </div>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('goals.index') }}">Volver</a>