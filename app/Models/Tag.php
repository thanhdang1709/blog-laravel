<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{	
	protected $table = 'tags';
	protected $fillable = ['name','slug'];
	public $timestamps = false;
    public function posts()
    {
        return $this->belongsToMany('App\Models\Post','post_tags','tag_id','post_id');
    }
}
