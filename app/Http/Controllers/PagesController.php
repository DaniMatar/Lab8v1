<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateArticleRequest;
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


    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }


    public function adminlogin()
    {


        return view ('pages.adminlogin');
    }








}

