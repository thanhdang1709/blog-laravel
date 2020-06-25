<?php

namespace App\Listeners;

use App\Events\NewPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailAfterNewPost implements ShouldQueue
{   
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewPost  $event
     * @return void
     */
    public function handle(NewPost $event)
    {
        //dd($event);
        if (true) {
            $this->release(30);
        }
        
        $fileName = $event->post->id . '.txt';
        $data = 'Sản phẩm mới tạo: ' . $event->post->title . ' với ID: ' . $event->post->id; 
        \File::put(public_path('/txt/' . $fileName), $data);
        return true;
    }

    public function failed(NewPost $event, $exception)
    {
        //
    }

}
