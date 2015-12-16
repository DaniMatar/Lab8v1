<?php namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QueryRequest;
use App\Tag;
use Carbon\Carbon;
use Auth;


class QueryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function searchtext(QueryRequest $queryRequest)
    {
        // Gets the query string from our form submission
        $query = QueryRequest::input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);

        // returns a view and passes the view the list of articles and the original query.
        return view('search.searchtext', compact('articles', 'query'));
    }


    public function index()
    {


        return view('queries.searchtext', compact('articles'));
    }


}

