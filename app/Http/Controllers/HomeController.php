<?php

namespace App\Http\Controllers;

use App\Category;
use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $games = Game::orderBy('created_at', 'desc')->whereNotIn('status', [-1]);
        if (Input::get('keyword')) {
            $games = $games->where('name', 'like', '%' . $request->get('keyword') . '%');

        }
        $category_id = Input::get('category_id');
        if ($category_id) {
            $games = $games->where('category_id', $category_id);
        } else {
            $category_id = 0;
        }
        $games = $games->paginate(5);
        $data = [
            'list' => $games->appends(Input::except('page')),
            'currentPage' => $request->get('page'),
            'currentCategoryId' => $category_id,
            'currentKeyword' => $request->get('keyword'),
            'categories' => Category::all()
        ];
        return view('game.home', $data);
    }

    public function cart()
    {
        return view('game.cart');
    }
}
