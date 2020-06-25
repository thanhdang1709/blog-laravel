<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Category;
class Post extends Model
{
    protected $fillable = ['title','slug','summary','content','status','comments','featured','thumbnail'];
    public function get_comments()
    {
    	return $this->hasMany('\App\Models\Comment','post_id');
    }

    public function categories()
    {
    	return $this->belongsToMany('\App\Models\Category','category_posts','post_id','category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','post_tags','post_id','tag_id');
    }


}
