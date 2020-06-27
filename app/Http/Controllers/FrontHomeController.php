<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostRepository;
use App\Models\Category;

class FrontHomeController extends Controller
{
    

    protected $postRepo;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepo->getAllWithPaginate();
        
        return view('front.index',compact('posts'));
    }

    public function single(Request $request)
    {
    	$post = $this->postRepo->find($request->slug);

    	return view('front.single',compact('post'));
    }

    public function about()
    {
    	return view('front.about');
    }

    public function contact()
    {
    	return view('front.contact');
    }
}
