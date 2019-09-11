<?php

namespace App\Http\Controllers;

use App\Category;
use App\Game;
use App\Http\Requests\GameValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Game::orderBy('created_at', 'desc')
            ->where('name', 'like', '%' . $request->get('keyword') . '%')
            ->where('category_id', $request->get('category_id'))
            ->whereNotIn('status', [-1])
            ->paginate(2);
        $data = [
            'list' => $list->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentCategoryId' => $request->get('category_id'),
            'currentKeyword' => $request->get('keyword'),
            'categories' => Category::all()
        ];
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

    public function getById($id)
    {
        $game = Game::find($id);
        return response()->json(['status' => '200', 'message' => 'Okie', 'data' => $game]);
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
        error_log('Some message here.');
        $game = Game::find($id);
        $game->delete();
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }

    public function changeStatus(Request $request)
    {
        $listItem = Game::whereIn('id', $request->input('ids'));
        $listItem->update(array(
            'status' => (int)$request->input('status'),
            'updated_at' => date('Y-m-d H:i:s')));
        return response()->json(['status' => '200', 'message' => 'Good']);
    }
}
