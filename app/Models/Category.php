<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Category extends Model
{
    
/*    public function posts()
    {
    	return $this->hasMany('\App\Models\Post');
    }
*/
    public function posts()
    {
    	return $this->belongsToMany('\App\Models\Post','category_posts','category_id','post_id');
    }
}
