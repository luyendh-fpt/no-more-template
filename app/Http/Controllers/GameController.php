<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\GameValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Game::paginate(10);
        $data = ['list' => $list];
        return view('game.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameValidation $request)
    {
        $request->validated();

        $game = new Game();
        $game->name = $request->get('name');
        $game->price = $request->get('price');
        $game->thumbnail = $request->get('thumbnail');
        $game->save();
        return redirect('/game');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        $data = ['game' => $game];
        return view('game.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $game = Game::find($id);
        $data = ['game' => $game];
        return view('game.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(GameValidation $request, $id)
    {
        $game = Game::find($id);
        $request->validated();
        $game->name = $request->get('name');
        $game->price = $request->get('price');
        $game->thumbnail = $request->get('thumbnail');
        $game->save();
        return redirect('/game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();
        return redirect('/game');
    }
}
