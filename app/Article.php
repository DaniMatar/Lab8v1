<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable = [


        'title',
        'body',
        'published_at',
        'user_id',
        'created_by',
        'modified_by'


    ];

    protected $primaryKey =  'article_id';

    protected $date = ['published_at'];


    public function scopePublished($query)
    {
        $query -> where('published_at', '<=', Carbon::now());
    }


    /*/ for Future Use

    public function scopeUnPublished($query)
    {
        $query -> where('published_at', '>', Carbon::now());
    }
    */

    public function setPublishedAtAttribute($date)
    {
        $this -> attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }



    public function user()
    {
        return $this->belongsTo('App\User'); // user_id
    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }



}
