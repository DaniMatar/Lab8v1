<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {


    protected $fillable = [

        'name',
        'article_id',


    ];

    protected $primaryKey =  'tag_id';

	//
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

}
