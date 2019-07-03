<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Category;

class moviesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.movies', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.movies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
            'cats' => 'required',
            'img'  => 'required',
            'rate' => 'required',
            'disc' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extention;
            $file->move('admin/images/', $imageName);
        }

        $movie = new Movie;

        $movie->name  = $request->name;
        $movie->disc  = $request->disc;
        $movie->image = $imageName;
        $movie->link  = $request->link;
        $movie->rate  = $request->rate;

        $movie->save();

        $movie->categories()->sync($request->cats);

        return redirect(route('movies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie      = Movie::find($id);
        $categories = Category::all();

        return view('admin.movies.edit', compact('movie', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
            'cats' => 'required',
            'rate' => 'required',
            'disc' => 'required',
        ]);


        $movie = Movie::find($id);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extention;
            $file->move('admin/images/', $imageName);
            $movie->image = $imageName;
        }

        $movie->name  = $request->name;
        $movie->disc  = $request->disc;
        $movie->link  = $request->link;
        $movie->rate  = $request->rate;

        $movie->save();

        $movie->categories()->sync($request->cats);

        return redirect(route('movies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id)->delete();

        return redirect()->back();
    }
}
