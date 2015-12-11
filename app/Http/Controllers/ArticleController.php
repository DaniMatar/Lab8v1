<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleRequest;
use App\Tag;
use Carbon\Carbon;
use Request;
use Auth;


class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {

            $this->middleware('auth', ['only' =>  array('create','edit')]);

    }

    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {


        $tags = Tag::lists('name','id');

       // if (Auth::guest()) {
            //return redirect('articles');

        //}
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ArticleRequest $request)
    {



        $this->createArticle($request);


        session()->flash('flash_message', 'Your Article has been created');
        session()->flash('flash_message_important', true);

        return redirect('articles')-> with ([

            'flash_message'=>'Your Article has been created',
            'flash_message_important' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show(Article $article)
    {



        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Article $article)

    {

        $tags = Tag::lists('name','id');

        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */

    public function update(Article $article, ArticleRequest $request)
    {



        $article->update($request->all());

        $this->syncTags($article, $request->input('tag_list'));


        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */






    public function destroy( $article)
    {
        //


        $article-> delete();


        session()->flash('flash_message', 'Your Article has been Deleted');
        session()->flash('flash_message_important', true);

        return redirect('/articles')-> with ([

            'flash_message'=>'Your Article has been Deleted',
            'flash_message_important' => true
        ]);

    }




    /**
     * @param Article $article
     * @param ArticleRequest $request
     */
    public function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }





    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());


        $this->syncTags($article, $request->input('tag_list'));


        return $article;
    }
}

