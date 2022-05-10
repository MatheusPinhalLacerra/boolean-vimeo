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

use App\Models\User;
use GuzzleHttp\Psr7\Request
use Vimeo\Laravel\VimeoManager;
use Vimeo\Vimeo;


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


    public function handle($request, $vimeo)

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
    public function handle(VimeoManager $vimeo)
    {
        dd($vimeo);
        // $client = new Vimeo("{client_id}", "{client_secret}", "{access_token}");
        // $client = new Vimeo(env('VIMEO_CLIENT'), env('VIMEO_SECRET'), env('VIMEO_ACCESS'));

        // $response = $client->request("/videos/690202507" . '?fields=link');
        // echo "Your video link is: " . $response['body']['link'];

        // dd($response['body']['link']);




        // $uri = $vimeo->upload($request->video, [
        //     'name' => $request->title
        // ]);


        // do {
        //     $response = $client->request($uri . '?fields=transcode.status');
        //     if ($response['body']['transcode']['status'] === 'complete') {
        //         print 'Your video finished transcoding.';
        //     } elseif ($response['body']['transcode']['status'] === 'in_progress') {
        //         print 'Your video is still transcoding.';
        //     } else {
        //         print 'Your video encountered an error during transcoding.';
        //     }
        // } while ($response['body']['transcode']['status'] !== 'complete');


    }
}
