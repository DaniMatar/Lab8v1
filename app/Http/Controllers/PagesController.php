<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Request;

class PagesController extends Controller {



    public function __construct()
    {
        $this->middleware('guest');
    }


    public function contact()
    {
        return view('pages.contact');
    }

    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function articles()
    {
        $articles = \App\Article::all();

        return view ('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);


        return view ('articles.show', compact('article'));
    }



    public function create()
    {

        return view ('articles.create');
    }


    public function store()
    {

        $input = Request::all();

        $input['published_at'] = Carbon::now();

        Article::create($input);


         return redirect ('articles');
    }

}
