<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostRepository;
use App\Repositories\Category\CategoryRepository;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
class FrontHomeController extends Controller
{
    

    protected $postRepo;
    protected $categoryRepo;

    public function __construct(PostRepository $postRepo,CategoryRepository $categoryRepo)
    {
        $this->postRepo = $postRepo;
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \Cache::remember('index',600,function() {
            return $this->postRepo->getAllWithPaginate();
            });
        
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

    public function filterCategory(Request $request)
    {
    	$category = $this->categoryRepo->findSlug($request->slug);
    	$posts = $category->posts;
    	return view('front.category',compact('posts'));
    }
    public function filterTag(Request $request)
    {
    	$tag = Tag::whereSlug($request->slug)->first();
    	$posts = $tag->posts;
    	return view('front.tag',compact('posts'));
    }

    public function search(Request $request)
    {
    	if ($request->slug != '') {
          $posts = $this->postRepo->search($request->slug,'title');
          return view('front.search',compact('posts'));
      	}
    }
}
