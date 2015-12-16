<?php namespace App\Http\Controllers;

use App\Area;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AreaRequest;
use App\Tag;
use Carbon\Carbon;
use Auth;


class AreasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
//         $this->middleware('auth', ['only' =>  array('create','edit','destroy')]);

    }

    public function index()
    {
        $area = Area::latest('published_at')->published()->get();

        return view('areas.index', compact('area'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        //$tags = Tag::lists('name','id');

       if (Auth::guest()) {
        return redirect('areas');

        }
        return view('area.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(AreaRequest $request)
    {



        $this->createArea($request);


        session()->flash('flash_message', 'Your area has been created');
        session()->flash('flash_message_important', true);

        return redirect('areas')-> with ([

            'flash_message'=>'Your area has been created',
            'flash_message_important' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($area_id)
    {
        $area = Area::where('area_id', $area_id)->first();
        return view('areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Area $area, Request $request)

    {
        $name = $request->user()->user_type;
        if ($name === 'User'){
            if ($request->user()->user_id === $area->user_id){
                //$tags = Tag::lists('name','id');
                return view('areas.edit', compact('area'));
            }
            else{
                return redirect('/areas');
            }


        }else {
            //$tags = Tag::lists('name', 'id');
            return view('areas.edit', compact('area'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */

    public function update(Request $request, $area_id)
    {
        $area = Area::where('page_id', $area_id)->first();

        $area->update($request->all());

        //$this->syncTags($page, $request->input('tag_list'));


        return redirect('areas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */






    public function destroy($area_id)
    {
        //

        $area = Area::where('page_id', $area_id)->first();
        $area-> delete();


        session()->flash('flash_message', 'Your area has been Deleted');
        session()->flash('flash_message_important', true);

        return redirect('/areas')-> with ([

            'flash_message'=>'Your area has been Deleted',
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





    private function createArea(AreaRequest $request)
    {
        $area = Auth::user()->area()->create($request->all());


        //$this->syncTags($page, $request->input('tag_list'));


        return $area;
    }
}

