<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Client\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Stmt\TryCatch;
use Vimeo\Laravel\VimeoManager;

class vimeoRow implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     */
    //public String $queue;

    public function __construct($request)
    {
         //$this->queue = "vimeoRow";


    }

    /**
     * Execute the job.
      *
     */
    public function handle(Request $request, )
    {

         $vimeo = new VimeoManager();

        try {

            $request->validate([
                'video' => 'required|mimetypes:video/mp4,video/mpeg,video/quicktime|max:60000'
            ]);


            $uri = $vimeo->upload($request->video, [
                'name' => $request->title

            ]);

        } catch (\Throwable $th) {


        }



    }
}
