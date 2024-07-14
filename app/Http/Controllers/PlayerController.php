<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('team')->get();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'team_id' => 'required|exists:teams,id', // Asegura que team_id exista en la tabla teams
        ]);

        // Crear un nuevo jugador con los datos validados
        Player::create($validatedData);

        // Redirigir a la vista de índice de jugadores
        return redirect()->route('players.index');
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('players.edit', compact('player', 'teams'));
    }

    public function update(Request $request, Player $player)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'team_id' => 'required|exists:teams,id', // Asegura que team_id exista en la tabla teams
        ]);

        // Actualizar los datos del jugador con los datos validados
        $player->update($validatedData);

        // Redirigir a la vista de detalles del jugador actualizado
        return redirect()->route('players.show', ['player' => $player->id]);
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }

}


