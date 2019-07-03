<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;

use App\User;
use App\Movie;
use App\Category;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats   = Category::all();
        $movies = Movie::OrderBy('id', 'desc')->take(4)->get();
        return view('home', compact('cats', 'movies'));
    }

    public function showMovie($id) {
        $category = Category::Where('id', '=', $id)->first();
        $movies  = Movie::inRandomOrder()->get();

        foreach($movies as $movie) {
            foreach($movie->categories as $m_cat) {
                if ($m_cat->id == $id) {
                    return view('user.movie', compact('movie', 'category'));
                }
            }
        }

    }
}
