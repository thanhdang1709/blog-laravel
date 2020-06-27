<?php
namespace App\Repositories\Category;

use App\Repositories\BaseRepository;
use Illuminate\Support\Str;
use App\Models\Tag;
use Event;
use App\Events\NewPost;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Category::class;
    }

    public function index()
    {
        return $this->model->take(5)->get();
    }

    public function find($id)
    {
        return $this->model->select('name')->whereId($id)->first();
    }
    public function findSlug($id)
    {
        return $this->model->whereSlug($id)->first();
    }
}