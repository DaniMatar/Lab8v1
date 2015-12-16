<?php namespace App\Http\Controllers;

use App\Page;
use App\Webpages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WebpagesRequest;
use App\Tag;
use Carbon\Carbon;
use Auth;


class WebpagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
//            $this->middleware('auth', ['only' =>  array('create','edit','destroy')]);

    }

    public function index()
    {
        $page = Webpages::latest('published_at')->published()->get();

        return view('webpages.index', compact('page'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        //$tags = Tag::lists('name','id');

        // if (Auth::guest()) {
        //return redirect('articles');

        //}
        return view('webpages.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(WebpagesRequest $request)
    {



        $this->createWebpages($request);


        session()->flash('flash_message', 'Your page has been created');
        session()->flash('flash_message_important', true);

        return redirect('webpages')-> with ([

            'flash_message'=>'Your page has been created',
            'flash_message_important' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($page_id)
    {
        $page = Webpages::where('article_id', $page_id)->first();
        return view('webpages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Webpages $page, Request $request)

    {
        $name = $request->user()->user_type;
        if ($name === 'User'){
            if ($request->user()->user_id === $page->user_id){
                //$tags = Tag::lists('name','id');
                return view('webpages.edit', compact('page'));
            }
            else{
                return redirect('/webpages');
            }


        }else {
            //$tags = Tag::lists('name', 'id');
            return view('webpages.edit', compact('page'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */

    public function update(Request $request, $page_id)
    {
        $page = Webpages::where('page_id', $page_id)->first();

        $page->update($request->all());

        //$this->syncTags($page, $request->input('tag_list'));


        return redirect('webpages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */






    public function destroy($page_id)
    {
        //

        $page = Webpages::where('page_id', $page_id)->first();
        $page-> delete();


        session()->flash('flash_message', 'Your page has been Deleted');
        session()->flash('flash_message_important', true);

        return redirect('/webpages')-> with ([

            'flash_message'=>'Your page has been Deleted',
            'flash_message_important' => true
        ]);

    }




    /**
     * @param Article $article
     * @param ArticleRequest $request
     */
//    public function syncTags(Article $article, array $tags)
//    {
//        $article->tags()->sync($tags);
//    }





    private function createWebpages(WebpagesRequest $request)
    {
        $page = Auth::user()->page()->create($request->all());


        //$this->syncTags($page, $request->input('tag_list'));


        return $page;
    }
}

