<?php namespace App\Http\Controllers;

use App\CSSTemp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CssRequest;
use App\Tag;
use Carbon\Carbon;
use Auth;


class CSSController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['only' =>  array('create','edit','destroy')]);

    }

    public function index()
    {
        $CssT = CSSTemp::latest('published_at')->published()->get();

        return view('CssTemplate.index', compact('CssT'));
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
        return view('CssTemplate.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CssRequest $request)
    {



        $this->createCss($request);


        session()->flash('flash_message', 'Your Article has been created');
        session()->flash('flash_message_important', true);

        return redirect('CssTemplate')-> with ([

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
    public function show($css_id)
    {
        $CssT = CSSTemp::where('css_id', $css_id)->first();
        return view('CssTemplate.show', compact('CssT'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(CSSTemp $CssT, Request $request)

    {
        $name = $request->user()->user_type;
        if ($name === 'User'){
            if ($request->user()->user_id === $CssT->user_id){
                $tags = Tag::lists('name','id');
                return view('CssTemplate.edit', compact('article', 'tags'));
            }
            else{
                return redirect('/CssTemplate');
            }


        }else {
            $tags = Tag::lists('name', 'id');
            return view('CssTemplate.edit', compact('article', 'tags'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */

    public function update(Request $request, $css_id)
    {
        $CssT = CSSTemp::where('css_id', $css_id)->first();

        $CssT->update($request->all());

       // $this->syncTags($CssT, $request->input('tag_list'));


        return redirect('CssTemplate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */






    public function destroy($css_id)
    {
        //

        $CssT = CSSTemp::where('css_id', $css_id)->first();
        $CssT-> delete();


        session()->flash('flash_message', 'Your Article has been Deleted');
        session()->flash('flash_message_important', true);

        return redirect('/CssTemplate')-> with ([

            'flash_message'=>'Your Article has been Deleted',
            'flash_message_important' => true
        ]);

    }




    /**
     * @param Article $article
     * @param ArticleRequest $request
     */





    private function createCss(CssRequest $request)
    {
        $CssT = Auth::user()->CssT()->create($request->all());


       // $this->syncTags($CssT, $request->input('tag_list'));


        return $CssT;
    }
}

