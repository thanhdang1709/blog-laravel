<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;
class sidebarPopularArticles extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar-popular-articles');
    }

    public function popularArticles()
    {
        return Post::inRandomOrder()->limit(5)->get();
    }
}
