<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get()
    {

    	return response()->json(
    		['data'=>[
    			0=>'Bai viet 1',
    			1=>'Bai viet 2',
    			2=>'Bai viet 3',
    			3=>'Bai viet 4',
    			4=>'Bai viet 5',
    			5=>'Bai viet 6',
    			6=>'Bai viet 7',
    			7=>\App\User::all()
    		]
    	]);
    }
}
