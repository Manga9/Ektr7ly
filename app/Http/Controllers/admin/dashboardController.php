<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Movie;
use App\Category;
use App\Admin;

class dashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $cats  = Category::all();
        $movies = Movie::all();
        $admins = Admin::all();
        return view('admin/dashboard', compact('users', 'cats', 'movies', 'admins'));
    }
}
