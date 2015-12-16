<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Query extends Model {

    protected $fillable = [




    ];





    /*/ for Future Use

    public function scopeUnPublished($query)
    {
        $query -> where('published_at', '>', Carbon::now());
    }
    */










}
