<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::latest()->get();

        return view('admin.games.index', compact('games'));
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(GameRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')
                ->store('games', 'public');
        }

        Game::create($data);

        return redirect()
            ->route('games.index')
            ->with('success', 'Game berhasil ditambahkan.');
    }

    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    public function update(GameRequest $request, Game $game)
    {
        $data = $request->validated();

        if ($request->hasFile('thumbnail')) {

            if ($game->thumbnail) {
                Storage::disk('public')->delete($game->thumbnail);
            }

            $data['thumbnail'] = $request->file('thumbnail')
                ->store('games', 'public');
        }

        $game->update($data);

        return redirect()
            ->route('games.index')
            ->with('success', 'Game berhasil diperbarui.');
    }

    public function destroy(Game $game)
    {
        if ($game->thumbnail) {
            Storage::disk('public')->delete($game->thumbnail);
        }

        $game->delete();

        return redirect()
            ->route('games.index')
            ->with('success', 'Game berhasil dihapus.');
    }
}