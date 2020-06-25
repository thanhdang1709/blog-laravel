<?php
namespace App\Repositories\Post;

use App\Repositories\BaseRepository;
use Illuminate\Support\Str;
use App\Models\Tag;

use Event;
use App\Events\NewPost;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Post::class;
    }

    public function index()
    {
        return $this->model->take(5)->get();
    }

    public function create($input = [])
    {
        $data = [
            'title'     =>  $input['title'],
            'slug'      =>  Str::slug($input['title'],'-'),
            'summary'   =>  $input['summary'],
            'content'   =>  $input['content'],
            'status'    =>  $input['status'],
            'comments'  =>  $input['comments'],
            'featured'  =>  1,
            'thumbnail' =>  $input['thumbnail']
        ];
        $post =  $this->model->create($data);
        if ($post) {
            $post->categories()->attach($input['category']);
            $tags = explode(',', $input['tags']);
            foreach ($tags as $tag) {
                $tag_id  = Tag::firstOrCreate(
                    [
                        'name'=>$tag,
                        'slug'=>Str::slug($tag)
                    ]);
                $post->tags()->attach($tag_id->id);
            }
        $post_handle = $this->model->find($post->id);
        event(new NewPost($post_handle));
            return true;
        }else{
            return false;
        }

    }

    public function find($id)
    {
        return $this->model->select('name')->whereId($id)->first();
    }
}