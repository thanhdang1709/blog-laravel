<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Post\PostRepository;
use App\Models\Category;
use App\Models\Post;
class PostController extends Controller
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
        
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();
        return view('admin.post.create',compact('categories'));
    }

    /**
     * Post data to creating a new record.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
        try {
            $input = $request->except(['_token','submit']);
            $request->validate([
                'title' => 'required',
                'summary' => 'required',
                'status' => 'required'
            ]);
            $post = $this->postRepo->create($input);

            return redirect()->back()->with('msg','Thêm bài viết thành công');
        } catch (Exception $e) {
            return redirect()->back()->with('msg','Thêm bài viết thất bại');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
        
        try {
            $this->postRepo->delete($request->id);
           return redirect()->back()->with('success','Xóa thành công!');
        } catch (Exception $e) {
            echo $e;
        }
        

    }
}
