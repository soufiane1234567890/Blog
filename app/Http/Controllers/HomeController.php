<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $postslast = DB::table('posts')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $postspopulaires = DB::table('posts')
            ->where('view_count', '>=', 1)
            ->take(4)
            ->get();
        $categories = Categorie::all()->take(10);
        //dd($postslast);
        return view('welcome', compact(['postslast', 'postspopulaires', 'categories']));
    }


}
